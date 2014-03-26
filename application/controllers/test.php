<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');

	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Hài hước & Ý nghĩa';
		$this->load->view('test/index',$data);
	}
}

