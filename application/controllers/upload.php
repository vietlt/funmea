<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class upload extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('cus_string');
	}
	
	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Đăng video mới';
		$this->load->view('upload/index', $data);
	}
	
	public function save_video()
	{
		$videocode = $this->input->post('videocode');
		$videotitle = $this->input->post('videotitle');
		$videodesc = $this->input->post('videodesc');
		if(!$this->post_model->check_video_code($videocode))
		{
			$data = array(
				'post_title' => $videotitle,
				'post_description' => $videodesc,
				'video_code' => $videocode,
				'post_type' => 1,
				'post_status' => 1,
				'post_slug' => gen_slug($videotitle)
			);
			if($this->post_model->insert($data))
				echo true;
		}
		else
			echo false;
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */
