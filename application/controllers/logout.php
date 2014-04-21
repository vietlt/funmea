<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->session->unset_userdata('info_fb');
        redirect(base_url(),'location');
	}
}

