<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class upload extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
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
		$data = array(
			'video_code' => $videocode,
			'video_title' => $videotitle,
			'video_description' => $videodesc,
			'video_status' => 0
		);
		if($this->video_model->insert($data))
			echo true;
		else
			echo false;
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */
