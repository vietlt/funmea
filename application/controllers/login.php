<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $fb_config = array(
            'appId' => APP_ID, //APP_ID và SECRET_KEY 2 biến này bạn đã define trong constants nên sử dụng rất dễ dàng
            'secret' => SECRET_KEY,
            'cookie' => TRUE,
        );
        // load library facebook để có thể sử dụng SDK của facebook nhé
        $this->load->library('facebook', $fb_config);
    }

    public function index()
    {
        $data['title'] = 'Funny & Meaning :: Đăng nhập';
        $this->load->view('login/index');
    }

    public function check()
    {
        if (!$this->session->userdata('info_fb')) {
            $action = "fblogin";
            switch ($action) {
                case "fblogin":
                    // lấy thông tin người dùng bạn có thể var_dump($fbuser); để xem các dữ liệu lấy được để mình xử lý
                    $fbuser = $this->facebook->getUser();

                    if ($fbuser) {
                        try {
                            $user_profile = $this->facebook->api('/me');
//                             echo '<pre>';
//                             print_r($user_profile);
//                             exit();
                            $userdata = array(
                                'id' => $user_profile['id'],
                                'name' => $user_profile['name'],
                                'link' => $user_profile['link']);
                            $this->session->set_userdata('info_fb', $userdata);

                            // var_dump($this->session->userdata('info_fb'));
                            // die();
                            redirect(base_url(), 'location');
                            // echo '123';exit();
                        } catch (Exception $e) {
                            echo $e->getMessage();
                            exit();
                        }
                        // $check = $this->m_login->get_user_profile_by_email($user_profile['email']);
                        // if(!$check) {
                        // 	$member = $this->save_member($user_profile);
                        // 	$this->session->set_userdata('user_facebook',$member);
                        // } else {
                        // 	$this->session->set_userdata('user_facebook',$check);
                        // }
                        // redirect(base_url());
                    }
                    break;
            }
        } else
        {
//            die('Da co');
//            var_dump($this->session->userdata('info_fb'));die();
            redirect(base_url(), 'location');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('info_fb');
        redirect(base_url(),'location');
    }
}