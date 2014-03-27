<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class detail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	public function video($slug)
	{
		$data['detail'] = $this->post_model->get_detail($slug,1);
		if($data['detail']==0)
		{
			show_404('page' ,['log_error']);
		}
		$this->load->view('video/detail',$data);
	}
}