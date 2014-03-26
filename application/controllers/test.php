<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Hài hước & Ý nghĩa';
        $this->config->set_item('frontend_layout','full_page');
		$this->load->view('test/index',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */