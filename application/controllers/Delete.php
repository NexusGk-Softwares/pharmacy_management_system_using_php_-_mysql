<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Delete extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel');
	}

	public function medicine_presentation($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('medicine_presentation_id', $id, 'create_medicine_presentation');
			redirect('ShowForm/create_medicine_presentation/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function generic_name($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('generic_id', $id, 'create_generic_name');
			redirect('ShowForm/create_generic_name/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function medicine_name($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('medicine_name_id', $id, 'create_medicine_name');
			redirect('ShowForm/create_medicine_name/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function product_category($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('record_id', $id, 'create_product_category');
			redirect('ShowForm/create_product_category/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function product_name($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('record_id', $id, 'create_product_name');
			redirect('ShowForm/create_product_name/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function supplier($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('supplier_id', $id, 'create_supplier');
			redirect('ShowForm/create_supplier/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	//Inventory
	public function medicine_purchase_info($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('purchase_id', $id, 'insert_purchase_info');
			redirect('ShowForm/medicine_purchase_info/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	// Staff Manage
	public function manage_staff($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('id', $id, 'staff');
			redirect('ShowForm/manage_staff/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
