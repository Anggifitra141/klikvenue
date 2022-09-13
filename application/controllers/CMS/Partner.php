<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

	/**
   *  =======   Author By    : Anggi Fitrahandika    ========
   *  =======   Version           : V.1.0                      ========
   *  ===========           Copyright 2021          ===================
  */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_partner');
		/*
		if (!$this->session->partnerdata('logged_in')) {
			$data = array();
			$data['msg'] = "Maaf Anda tidak punya akses ke halaman ini !";
			$content = $this->load->view('errors/html/error_sessi', $data, TRUE);
			exit($content);
		} */
	}

	public function index()
	{
		$data = [];
		$data['content'] = $this->load->view('cms/partner', $data, TRUE);
		$this->load->view('cms/layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->M_partner->Get_All();
		$data = array();
		$no = 1;
		foreach ($list as $item) {
			$row = array();
			$row[] = $no++;
			$row[] = '<a href="#" onclick="get_partner(' . $item->id . ')" class="btn btn-icon btn-primary btn-sm"><i class="far fa-edit"></i></a>
                  <a href="#" onclick="delete_partner(' . $item->id . ')" class="btn btn-icon btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
			$row[] = $item->name;
			$row[] = $item->phone_no;
			$row[] = $item->email;
			$row[] = $item->website;
			$row[] = $item->province;
			$row[] = $item->city;
			$row[] = $item->address;
			$row[] = $item->description;
			$row[] = $item->thumbnail;
			$row[] = $item->logo;
			$row[] = $item->maps;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_partner->count_all(),
			"recordsFiltered" => $this->M_partner->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}

	public function get_partner($id)
	{
		$data = $this->M_partner->get_partner($id);
		echo json_encode($data);
	}

	public function add_partner()
	{
		$ACT = 'add';
		$this->_validate($ACT);
		$data = array(
			'partner_category_id' => 	$this->input->post('partner_category_id'),
			'name'             		=>	$this->input->post('name'),
			'phone_no'           	=> 	$this->input->post('phone_no'),
			'email'         			=>	$this->input->post('email'),
			'website'       			=>  $this->input->post('website'),
			'address'             => 	$this->input->post('address'),
			'description'					=> 	$this->input->post('description'),
			'city_id'							=> 	$this->input->post('city_id'),
			'province_id'					=> 	$this->input->post('province_id'),
			'thumbnail'						=> 	$this->input->post('thumbnail'),
			'logo'								=> 	$this->input->post('logo'),
			'maps'								=> 	$this->input->post('maps')
		);
		$this->M_partner->add_partner($data);
		echo json_encode(array("status" => TRUE));
	}

	public function update_partner()
	{
		$ACT = 'update';
		$this->_validate($ACT);
		$data = array(
			'partner_category_id' => 	$this->input->post('partner_category_id'),
			'name'             		=>	$this->input->post('name'),
			'phone_no'           	=> 	$this->input->post('phone_no'),
			'email'         			=>	$this->input->post('email'),
			'website'       			=>  $this->input->post('website'),
			'address'             => 	$this->input->post('address'),
			'description'					=> 	$this->input->post('description'),
			'city_id'							=> 	$this->input->post('city_id'),
			'province_id'					=> 	$this->input->post('province_id'),
			'thumbnail'						=> 	$this->input->post('thumbnail'),
			'logo'								=> 	$this->input->post('logo'),
			'maps'								=> 	$this->input->post('maps')
		);

		$this->M_partner->update_partner(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function delete_partner($id)
	{
		$this->M_partner->delete_partner($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate($event)
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		$actions = explode('#', $this->session->partnerdata('action'));
		$data['action'] = $actions;

		if (!in_array($event, $actions)) {
			$data['inputerror'][] = 'sess_act';
			$data['error_string'][] = 'Error! You have no right to this action.';
			$data['status'] = FALSE;
		}
		if ($this->input->post('partner_category_id') == '') {
			$data['inputerror'][] = 'partner_category_id';
			$data['error_string'][] = 'Partner Category is required';
			$data['status'] = FALSE;
		}
		if ($this->input->post('name') == '') {
			$data['inputerror'][] = 'name';
			$data['error_string'][] = 'name is required';
			$data['status'] = FALSE;
		}
		if ($this->input->post('phone_no') == '') {
			$data['inputerror'][] = 'fullname';
			$data['error_string'][] = 'fullname is required';
			$data['status'] = FALSE;
		}
		if ($this->input->post('partner_group') == '') {
			$data['inputerror'][] = 'partner_group';
			$data['error_string'][] = 'partner_group is required';
			$data['status'] = FALSE;
		}
		if ($this->input->post('status') == '') {
			$data['inputerror'][] = 'status';
			$data['error_string'][] = 'status is required';
			$data['status'] = FALSE;
		}

		if ($this->input->post('id')) {
			$partner = $this->M_partner->get_partner($this->input->post('id'));
			if ($this->input->post('name') != '') {
				if ($partner->name != $this->input->post('name')) {
					$cek = $this->M_partner->get(['name' => $this->input->post('name')]);
					if ($cek->num_rows()) {
						$data['inputerror'][] = 'name';
						$data['error_string'][] = 'name Already Registered';
						$data['status'] = FALSE;
					}
				}
			}
		} else {

			if ($this->input->post('name') != '') {
				$cek = $this->M_partner->get(['name' => $this->input->post('name')]);
				if ($cek->num_rows()) {
					$data['inputerror'][] = 'name';
					$data['error_string'][] = 'name Already Registered';
					$data['status'] = FALSE;
				}
			}

			if ($this->input->post('password') == '') {
				$data['inputerror'][] = 'password';
				$data['error_string'][] = 'Password Is Required';
				$data['status'] = FALSE;
			}
		}
		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}
}
