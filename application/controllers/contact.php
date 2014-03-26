<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Liên hệ';
		$this->load->view('contact/index',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */