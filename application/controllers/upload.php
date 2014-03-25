<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Đăng video mới';
		$this->load->view('upload/index',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */