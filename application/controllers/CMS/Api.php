<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

	/**
	 *  =======   Author By    : Anggi Fitrahandika    ========
	 *  =======   Version           : V.1.0                      ========
	 *  ===========           Copyright 2021          ===================
	 */

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('M_app');
		if (!$this->session->userdata('logged_in')) {
			$data = array();
			//$data['msg'] = "Maaf Anda tidak punya akses ke halaman ini !";
			//$content = $this->load->view('errors/html/error_sessi', $data, TRUE);
			//exit($content);
		}
	}

	public function get_province()
	{
		$query = $this->db->get("province");
		$output = $query->result();
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function get_city()
	{
		$output = [];
		$province_id = $this->input->post("id", TRUE);
		if ($province_id) {
			$query = $this->db->get_where("city", array("province_id" => $province_id));
			$output = $query->result();
		} else {
			$output = [];
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}
