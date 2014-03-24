<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class test extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
    }

    public function index()
    {
        $data['title'] = 'CI-Master :: Tesst';
        $this->load->view('test/index', $data);
    }
}