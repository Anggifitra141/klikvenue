<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
    $data = [];
		$data['content'] = $this->load->view('products', $data, TRUE);
		$this->load->view('landing_page', $data);
	}

	public function get_products_list()
	{
		$this->db->select('product.*, province.name as province, city.name as city');
		$this->db->from('product');
		$this->db->join('province', 'product.province_id = province.id');
		$this->db->join('city', 'product.city_id = city.id');
		$query = $this->db->get()->result();

		echo json_encode($query);
	}

}
