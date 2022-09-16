<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


	public function index()
	{
    $data = [];
		$data['content'] = $this->load->view('search', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

	public function get_partner_list()
	{
		$this->db->select('partner.*, province.name as province, city.name as city, partner_category.name as partner_category');
		$this->db->from('partner');
		$this->db->join('province', 'partner.province_id = province.id');
		$this->db->join('city', 'partner.city_id = city.id');
		$this->db->join('partner_category', 'partner.partner_category_id = partner_category.id');
		$query = $this->db->get()->result();

		echo json_encode($query);
	}



}
