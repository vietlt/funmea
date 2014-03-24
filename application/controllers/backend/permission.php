<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class permission extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
    }

    public function index()
    {
        $data['title'] = 'CI-Master :: Quản trị phân quyển';
        $data['all_permissions'] = $this->permission_model->get_all();
        $this->load->helper('roles');
        $data['list_action'] = load_action();
        $this->load->view('permission/index', $data);
    }

    public function save()
    {
        $action = $this->input->post('permissionaction');
        $permissionname = $this->input->post('permissionname');
        $permissiondesc = $this->input->post('permissiondesc');

        $data = array(
            'permission_name'=>$permissionname,
            'permission_desc'=>$permissiondesc,
            'action'=>$action
        );
        $last_id = $this->permission_model->insert($data);
        if ($last_id)
            echo json_encode(array(
                'status' => true,
                'last_id' => $last_id 
            ));
        else
            echo json_encode(array(
                'status' => false
            ));
    }

    public function delete()
    {
        if($this->input->is_ajax_request())
        {
            $permid = $this->input->post('permid');
            if($this->permission_model->delete($permid))
                echo true;
            else
                echo false;

        }
    }
}