<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	public function index()
	{
		die('Hereeeeeeeeeeeeeeeeeee');
		$data['title'] = 'Funny & Meaning :: Hài hước & Ý nghĩa';
		$data['new_videos'] = $this->post_model->get_new_videos(10);
		$data['unwatch_videos'] = $this->post_model->get_unwatch_videos(10);
		$data['seemore_videos'] = $this->post_model->get_seemore_videos(10,2);
        $this->config->set_item('frontend_layout','full_page');
		$this->load->view('home/index',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */