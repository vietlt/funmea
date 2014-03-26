<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Funny & Meaning :: Hài hước & Ý nghĩa';
		$this->load->view('test');
	}
}