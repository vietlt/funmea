<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class detail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	public function index($slug)
	{
		$data['detail'] = $this->video_model->getDetail($slug,1);
		if($data['detail']==0)
		{
			show_404('page' ,['log_error']);
			$this->config->set_item('frontend_layout','full_page');
			$this->load->view('detail/index',$data);
		}
		else
		{
			$this->config->set_item('frontend_layout','full_page');
			$this->load->view('detail/index',$data);
		}
		// $data['new_videos'] = $this->video_model->get_all(2);

	}
}