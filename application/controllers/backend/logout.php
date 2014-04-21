<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->session->unset_userdata('account_info');
		redirect(base_url('backend'),'location');
	}

}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */