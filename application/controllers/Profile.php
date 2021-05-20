<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
    $data = [];
		$data['content'] = $this->load->view('profile', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

}
