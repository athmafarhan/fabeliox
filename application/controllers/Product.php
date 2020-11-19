<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		$this->session->set_userdata('is_set_session', false);
		// $is_set_session = false;
		// if ($is_set_session == false) {
		// 	$data['products'] = $this->db->get('products')->result_array();
		// 	$this->session->set_userdata('products', $data['products']);
		// }
	}

	public function index($id = NULL)
	{
		if ($id != NULL) {
			$data['product'] = $this->db->get_where('products', ['id' => $id])->result_array();
			$sql = 'SELECT * FROM `products` WHERE id != ' . $id . ' AND material = "' . $data['product'][0]['material'] . '" ORDER BY RAND() LIMIT 1';
			$data['similar_product'] = $this->db->query($sql)->row_array();

			// var_dump($this->db->last_query());
			// var_dump($data['similar_product']);
			// die;
			$this->load->view('pages/product-detail', $data);
		} else {

			$data['products'] = $this->db->get('products')->result_array();
			$this->session->set_userdata('products', $data['products']);
			// var_dump($this->session->userdata('products'));
			$this->load->view('pages/product', $data);
		}
	}
}
