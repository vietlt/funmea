<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Danh sách tin tức';
		// $data['new_videos'] = $this->news_model->get_new_news(10);
		$this->load->view('news/list',$data);
	}

	function fb_comment_count($url)
	{
		$url = 'https://www.facebook.com/photo.php?fbid=549783738468154&set=a.376607185785811.1073741825.100003095970483&type=1&theater';
		$xml = simplexml_load_file("http://api.facebook.com/restserver.php?method=links.getStats&urls=".$url);
		$counts = $xml->link_stat->share_count; //share count
		echo "<pre/>";
		print_r($xml);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */