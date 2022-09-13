<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  /**
   *  =======   Author By    : Anggi Fitrahandika    ========
   *  =======   Version           : V.1.0                      ========
   *  ===========           Copyright 2021          ===================
  */

	public function __construct()
	{
		parent::__construct();
    //$this->load->model('M_app');
    if(!$this->session->userdata('logged_in'))
    {
      $data=array();
			//$data['msg'] = "Maaf Anda tidak punya akses ke halaman ini !";
			//$content = $this->load->view('errors/html/error_sessi', $data, TRUE);
			//exit($content);
    }
	}

	public function index()
	{
		$data = [];
		$data['content'] = $this->load->view('cms/dashboard', $data, TRUE);
		$this->load->view('cms/layout', $data);
	}

}
