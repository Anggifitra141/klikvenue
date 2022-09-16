<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {


	function index($slug="")
	{
		$data = [];
		$data['slug'] = $slug;
		$data['content'] = $this->load->view('partner', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

	public function get_partner($slug="")
	{
		$this->db->select('partner.*, province.name as province, city.name as city, partner_category.name as partner_category');
		$this->db->from('partner');
		$this->db->join('province', 'partner.province_id = province.id');
		$this->db->join('city', 'partner.city_id = city.id');
		$this->db->join('partner_category', 'partner.partner_category_id = partner_category.id');
		$this->db->where('partner.slug', $slug);
		$query = $this->db->get()->row();

		echo json_encode($query);
	}

	public function get_partner_product($partner_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('partner_id', $partner_id);
		$query = $this->db->get()->result();

		echo json_encode($query);
	}


}
