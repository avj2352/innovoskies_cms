<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*Only Admins are allowed to create drop tables, therefore Migration Controller extends the Admin_Controller*/
class Migration extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	} 

	public function index(){
		$this->load->library('migration');
		
		/*current (); This will do the following steps:
		*Step 1: Look for the current migration version (eg: 1)
		*Step 2: Look inside the migrations folder for a file beginning with 001
		*Step 3: Run the file*/
		if(! $this->migration->latest()){
			/*If any errors when running the current Migration file then show the error*/
			show_error($this->migration->error_string());
		}else{
			echo "Migration Worked";

		}/*end if*/
	}/*End of index*/

}/* End of file migration.php */
/* Location: ./application/controllers/migration.php */