<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	public function index()
	{
    $data = [];
		$data['content'] = $this->load->view('search', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

}
