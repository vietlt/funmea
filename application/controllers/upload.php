<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class upload extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('cus_string');
		if(!$this->session->userdata('info_fb'))
		{
			redirect(base_url().'login','location');
		}
		$fb_config = array(
            'appId' => APP_ID,
            'secret' => SECRET_KEY,
            'cookie' => TRUE,
        );
        $this->load->library('facebook', $fb_config);
	}
	
	public function index()
	{
		$data['title'] = 'Đăng video mới :: Funny & Meaning ::';
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
				'create_by' => json_encode($this->session->userdata('info_fb')),
				'post_type' => 1,
				'post_status' => 1,
				'post_slug' => gen_slug($videotitle)
			);
			if($this->post_model->insert($data))
				echo true;
			else
				echo false;
		}
		else
			echo 'warning';
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */
