<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Danh sách tin tức';
		// $data['new_videos'] = $this->news_model->get_new_news(10);
		$this->load->view('news/list',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */