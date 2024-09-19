<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/25/2019
 * Time: 11:32 PM
 */

class ShowForm extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('CommonModel');
	} // Load Common Model

	public function create_medicine_presentation($msg) {
		$data['page_title'] = "Medicine Pesentation";
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_medicine_presentation');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/medicine_presentation",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_generic_name($msg) {
		$data['page_title'] = "Generic Name";

		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/generic_name",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_medicine_name($msg) {
		$data['page_title'] = "Medicine Name";
		if ($this->session->userdata('username') != '') {
			$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['all_value'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/medicine_name",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_product_category($msg) {
		$data['page_title'] = "Category";
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_product_category');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/product_category",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_product_name($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_product_cat'] = $this->CommonModel->get_all_info('create_product_category');
			$data['all_value'] = $this->CommonModel->get_all_info('create_product_name');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/product_name",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_supplier($msg) {
		$data['page_title'] = "Supplier";
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("create_option/header", $data);
			$this->load->view("create_option/supplier",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	//Inventory Start
	public function medicine_purchase_info($msg) {
		$data['page_title'] = "Medicine Purchase Information";
		if ($this->session->userdata('username') != '') {
		$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
		$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
		$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
		$data['all_presen'] = $this->CommonModel->get_all_info('create_medicine_presentation');
		$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
		$data['msg'] = $msg;

		// Getting sold products quantity
		$med_ids = array_column($data['all_value'],'medicine_name_id');
		$data['sold'] = [];
		$med_ids = array_filter($med_ids);
		// print_r($med_ids);exit;
		if(count($med_ids) > 0){
			$sql = "SELECT medicine_name_id,(SUM(qty)) as sold FROM `sales_product` where medicine_name_id in (".(implode(',', $med_ids)).") group by medicine_name_id";
			$data['sold'] = $this->CommonModel->get_array_column($sql,'sold','medicine_name_id');
			// print_r($data['sold']);exit;
		}
		
		$this->load->view("header", $data);
		$this->load->view("inventory/medicine_purchase_info",$data);
		$this->load->view("footer");
	} else {
		$data['wrong_msg'] = "";
		$this->load->view('Main/login', $data);
	}
}

	public function edit_purchase_info($id) {
		$data['page_title'] = "Edit Purchase Information";
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['all_presen'] = $this->CommonModel->get_all_info('create_medicine_presentation');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
	    	$data['one_value'] = $this->CommonModel->get_allinfo_byid('insert_purchase_info', 'purchase_id', $id);

			$this->load->view("header", $data);
			$this->load->view("inventory/edit_purchase_info",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	public function medicine_purchase_statement($msg) {
		$data['page_title'] = "Medicine Purchase Statement";
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("inventory/medicine_purchase_statement",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	public function supplier_payment($msg) {
		$data['page_title'] = "Supplier Payment";
		if ($this->session->userdata('username') != '' || $this->session->userdata('username') != 'staff' ) {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("inventory/supplier_payment",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
// Inventory END

//Sales Start
	public function sell_medicine($msg) {
		$data['page_title'] = "Sell Medicine";
		if ($this->session->userdata('username') != '') {
		//	$data['all_value'] = $this->CommonModel->get_all_info_not_null('insert_purchase_info','medicine_name');
		    $data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("sales/sell_product",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function sell_statement($msg)
	{
		$data['page_title'] = "Sell Statement";
		if ($this->session->userdata('username') != '' || $this->session->userdata('username') != 'staff' ) {
			$data['all_value'] = $this->CommonModel->get_all_info('sales_product');
			$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("sales/sell_statement", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);

		}
	}
	// Account
		public function profit_loss($msg)
		{
			if ($this->session->userdata('username') != '') {
				$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
				$data['msg'] = $msg;
				$this->load->view("header", $data);
				$this->load->view("account/profit_loss", $data);
				$this->load->view("footer");
			} else {
				$data['wrong_msg'] = "";
				$this->load->view('Main/login', $data);
			}
		}
		// Manage Staff
	public function manage_staff($msg)
	{
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('staff');
			$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("manage_staff", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function edit_staff_info($id)
	{
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('staff');
			$data['one_value'] = $this->CommonModel->get_allinfo_byid('staff', 'id', $id);
			//$data['msg'] = $msg;
			$this->load->view("header", $data);
			$this->load->view("edit_manage_staff", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

			}  // end
