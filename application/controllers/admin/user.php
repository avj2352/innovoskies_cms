 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*This controller is on the topic: User authentication: Lesson 7*/
class User extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/*For managing users, We use the following functions*/
	/*Function to create a new User*/
	/*Lesson09: Managing User part 1*/
	/*index() - Here we fetch all users from the Database*/
	public function index(){
		$this->data['users'] = $this->user_m->get();

	/*Load the view with the data array*/	
		$this->data['subview'] = 'admin/user/index';
		$this->load->view('admin/_layout_main', $this->data);
	}/*End of the index function*/

	/*Function to edit current user*/

	public function edit($id = NULL){
	/*Lesson09: Managing User part 1*/
	/*edit() - Fetch a user or set a new one*/
		if($id){
			$this->data['user'] = $this->user_m->get($id);
			/*If ID exists, and the User is not FOUND*/
			count($this->data['user']) || $this->data['errors'][] ="User could not be found";

		}else{
			$this->data['user'] = $this->user_m->get_new();
		}

		/*This is to create a Form validation*/
		/*edit() - Setup the form */
		$rules = $this->user_m->rules_admin;
		/*Do a bit of Hacking into the rules - If we are inserting a new User, Password is required*/
		$id || $rules['password']['rules'] .= '|required';		
		$this->form_validation->set_rules($rules);

		/*edit() - Process the form*/
		if($this->form_validation->run() == TRUE){
			/*To setup a new method to set of values to be stored properly*/
			 $data = $this->user_m->array_from_post(array('name', 'email', 'password'));
			 /*We need to run the password through the HASH method - if you recall*/
			 $data['password'] = $this->user_m->hash($data['password']);
			 /*The Save method is already created in the MY_Model.php*/
			 $this->user_m->save($data, $id);
			 redirect('admin/user');
		}/*End of Form Validation*/

		/*edit() - Load the view with the data array*/
		$this->data['subview'] = 'admin/user/edit';
		$this->load->view('admin/_layout_main', $this->data);

	}/*End of the edit function*/

	public function delete($id){
		/*Lesson 10: To delete the User WITH ID*/
		$this->user_m->delete($id);
		redirect('admin/user');

	}/*End of the delete function*/

	public function login(){
		/*One line code to check if the user is logged in :)*/
 		/*login() - Redirect the User if he is  already logged in */
 		$this->user_m->loggedin() == FALSE || redirect('admin/dashboard');

		/*This is to create a Form validation*/
		/*login() - Setup the Login form*/
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);

		/*login() - Process the form*/
		if($this->form_validation->run() == TRUE){
			 /*form_validation was successful, User should login*/
			 if($this->user_m->login() == TRUE){
			 	redirect('admin/dashboard');
			 }else{
			 	$this->session->set_flashdata('error', 'The Email/Password combination does not exist');
			 	redirect('admin/user/login', 'refresh');
			 }
		}/*End of Form Validation*/

		/*login() - Load the view*/
		$this->data['subview'] = 'admin/user/login';
		$this->data['hashvalue'] = hash('sha512', 'zuko2352' . config_item('encryption_key'));
		$this->load->view('admin/_layout_modal', $this->data);
	}/*End of login method*/

	public function logout(){
		$this->user_m->logout();
		redirect('admin/user/login');
	}/*End of logout method*/


	/*This is being called inside of the user_m ->$rules_admin array*/
	public function _unique_email($str){
		/*The way we set this is up is similar to is_unique() of CI*/
		/*Except we check for an Exception*/
		/*_unique_email() - This is only called in the Edit User form*/
		/*Do not Validate if the the User already exists*/
		/*UNLESS its the email for the currently updated User*/
		$id = $this->uri->segment(4);
		$user = $this->db->where('email', $this->input->post('email'));
		/*We should look for the email as unique, only except for the current user*/
		/*If we donot have a user ID then ignore this line*/
		!$id || $this->db->where('id !=', $id);
		$user = $this->user_m->get();
		/*If the user is found*/
		if(count($user)){
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		return TRUE;
	}/*End of the custom callback: _unique_email method*/

}/* End of file user.php */
/* Location: ./application/controllers/user.php */













