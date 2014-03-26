<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends FrontEnd_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('_main_layout', $this->data);
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */