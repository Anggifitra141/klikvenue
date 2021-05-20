<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
    $data = [];
		$data['content'] = $this->load->view('home', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

}
