<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		/*Creating variables inside the data array for errors, sitename, */
		$this->data['errors'] = array();
		/*This will get the values from the config file - config.php*/
		$this->data['site_name'] = config_item('site_name');

	}

	public function index()
	{
		
	}

}/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */