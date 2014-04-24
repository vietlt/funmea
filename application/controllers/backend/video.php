<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class video extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	public function index()
	{
		$data['title'] = 'Danh sách bài đăng video';
		$data['videos'] = $this->post_model->get_all_desc();
		// echo '<pre>';
		// print_r($data['videos']);
		// exit();
		$this->load->view('post/index', $data);
	}

	public function delete()
	{
	    if($this->input->is_ajax_request())
	    {
	        $videoid = $this->input->post('videoid');
	        if($this->post_model->delete($videoid))
	            echo true;
	        else
	            echo false;

	    }
	}

}

/* End of file video.php */
/* Location: ./application/controllers/video.php */