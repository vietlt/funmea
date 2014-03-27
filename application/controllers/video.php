<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class video extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Danh sách videos';
		$data['new_videos'] = $this->post_model->get_new_videos(10);
		$this->load->view('video/list',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */