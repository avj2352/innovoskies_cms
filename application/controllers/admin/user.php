<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function login(){
		$this->user_m->loggedin() == FALSE || redirect('admin/dashboard');

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

		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_modal', $this->data);
	}/*End of the login method*/

	/*Function to Logout from the Dashboard*/
	public function logout(){
		$this->user_m->logout();
		redirect('admin/user/login');
	}/*End of logout method*/

}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */