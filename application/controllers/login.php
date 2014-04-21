<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $fb_config = array(
            'appId' => APP_ID,
            'secret' => SECRET_KEY,
            'cookie' => TRUE,
        );
        $this->load->library('facebook', $fb_config);
        if ($this->session->userdata('info_fb'))
            redirect(base_url());
    }

    public function index()
    {
        $data['title'] = 'Đăng nhập :: Funny & Meaning :: ';
        $this->load->view('login/index',$data);
    }

    public function check()
    {
        $action = "fblogin";
        switch ($action) {
            case "fblogin":
                $fbuser = $this->facebook->getUser();
                if ($fbuser) {
                    try {
                        $user_profile = $this->facebook->api('/me');
                        $userdata = array(
                            'id' => $user_profile['id'],
                            'name' => $user_profile['name'],
                            'link' => $user_profile['link']
                            );
                        $this->session->set_userdata('info_fb', $userdata);

                        redirect(base_url(), 'location');
                    } catch (Exception $e) {
                        echo $e->getMessage();
                        exit();
                    }
                }
                break;
        }
    }
}