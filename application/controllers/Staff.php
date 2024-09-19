<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('CommonModel');
	} // Load Common Model

	function index()
	{
		$data['title'] = 'CodeIgniter Simple Login form With Session';
		$this->load->view("staff_login", $data);
	}

	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			//true
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			//model function
			$this->load->model('Main_model');
			if ($this->Main_model->staff_can_login($username, $password)) {
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Staff/staff_sell');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'Staff');
			}
		} else {
			//false
			$this->index();
		}
	}

	//empty ok
	function staff_sell()
	{
		if ($this->session->userdata('username') != '') {

			$data['medicine_qty'] = count($this->CommonModel->get_all_info('create_medicine_name')); //

			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			//$data['msg'] = $msg;
			$this->load->view("staff_sales/header");
			$this->load->view("staff_sales/sell_product",$data);
			$this->load->view("footer");
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'Staff');
	}
}
