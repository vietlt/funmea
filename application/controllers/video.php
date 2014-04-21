<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class video extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}

	public function index($type)
	{
		$data['title'] = 'Funny & Meaning :: Danh sách videos';
		if($type == 'xem-nhieu')
			{
				$data['title_breakcrumb'] = 'Top videos có số lượt xem nhiều nhất !'; 
				$data['videos'] = $this->post_model->get_top_view(10);
			}
		if($type == 'comment-nhieu')
			{
				$data['title_breakcrumb'] = 'Top videos có số lượt comment nhiều nhất !'; 
				$data['videos'] = $this->post_model->get_top_comment(10);
			}
		if($type == 'cho-duyet')
			{
				$data['title_breakcrumb'] = 'Tổng hợp những videos đang chờ duyệt !'; 
				$data['videos'] = $this->post_model->get_waiting_browse(10);
			}
		if($type == null || !isset($type))
		{
			$data['title_breakcrumb'] = 'Danh sách video mới cập nhật !'; 
			$data['videos'] = $this->post_model->get_new_videos(10);	
		}
		$this->load->view('video/list',$data);
	}

	public function detail($slug)
	{
		$data['detail'] = $this->post_model->get_detail($slug,1);
		$this->post_model->update($data['detail']->getPost_id(),array('count_view' => $data['detail']->getCount_view()+1));
		$data['title'] = $data['detail']->getPost_title().' ::Funny & Meaning';
		if($data['detail']==0)
		{
			show_404('page' ,['log_error']);
		}
		$data['videos_random'] = $this->post_model->get_random(5);

		$this->load->view('video/detail',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */