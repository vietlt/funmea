<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Hài hước & Ý nghĩa';
		$data['new_videos'] = $this->video_model->get_all(2);
        $this->config->set_item('frontend_layout','full_page');
		$this->load->view('home/index',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */