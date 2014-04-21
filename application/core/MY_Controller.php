<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 * @property CI_Table $table
 * @property CI_Session $session
 * @property CI_FTP $ftp
 *
 */
class MY_Controller extends CI_Controller
{
    protected $class_name;
    protected $function_name;
    protected $about_home;
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->session->set_userdata('previous_page', uri_string()); 
        $this->config->set_item('current_area','frontend');
        if($this->uri->segment(1) == "backend")
            $this->config->set_item('current_area','backend');
        // die($this->config->item('current_area'));
    }

    public function _remap($method, $params = array())
    {
        $this->setupVariables($method);

        if (method_exists($this, $method))
        {
            $result = @call_user_func_array(array($this, $method), $params);

            if ($result === FALSE)
            {
                show_404();
            }
        } else
            show_404();
    }

    public function logoutfb()
    {
        $this->session->unset_userdata('info_fb');
        redirect(base_url(),'location');
    }

    protected function setupVariables($method)
    {
        $this->class_name = strtolower(get_class($this));
        $this->function_name = strtolower($method);
    }
}
