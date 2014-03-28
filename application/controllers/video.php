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

	public function detail($slug)
	{
		$data['detail'] = $this->post_model->get_detail($slug,1);
		$data['title'] = $data['detail']->getPost_title().' ::Funny & Meaning';
		if($data['detail']==0)
		{
			show_404('page' ,['log_error']);
		}
		$this->load->view('video/detail',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */