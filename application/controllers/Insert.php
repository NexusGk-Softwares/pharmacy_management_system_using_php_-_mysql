<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/25/2019
 * Time: 11:39 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Insert extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('CommonModel');
	}

	// Create Option Start
	public function medicine_presentation() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('medicine_presentation', 'Medicine Presentation', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_medicine_presentation/empty', 'refresh');
			} else {
				$medicine_presentation = $this->input->post('medicine_presentation');
				$insert_data = array(
					'medicine_presentation' => $medicine_presentation
				);
				$this->CommonModel->insert_data('create_medicine_presentation', $insert_data); //insert data to table
				redirect('ShowForm/create_medicine_presentation/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function generic_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('generic_name', 'Generic Name', 'trim|required');// check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_generic_name/empty', 'refresh'); //If form not  validate
			} else {
				$generic_name = $this->input->post('generic_name');
				$insert_data = array(
					'generic_name' => $generic_name
				);
				$this->CommonModel->insert_data('create_generic_name', $insert_data); //insert data to table
				redirect('ShowForm/create_generic_name/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function medicine_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('generic_name', 'Generic Name', 'trim|required'); // check form validation
			$this->form_validation->set_rules('medicine_name', 'Medicine Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_generic_name/empty', 'refresh'); //If form not  validate
			} else {
				$generic_name = $this->input->post('generic_name');
				$medicine_name = $this->input->post('medicine_name');
				$insert_data = array(
					'generic_name' => $generic_name,
					'medicine_name' => $medicine_name
				);
				$this->CommonModel->insert_data('create_medicine_name', $insert_data); //insert data to table
				redirect('ShowForm/create_medicine_name/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function product_category() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('product_category', 'Product Category', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_product_category/empty', 'refresh'); //If form not  validate
			} else {

				$product_category= $this->input->post('product_category'); //get data from file to variable
				$insert_data = array(
					'product_category' => $product_category //insert data to column
				);
				$this->CommonModel->insert_data('create_product_category', $insert_data); //insert data to table
				redirect('ShowForm/create_product_category/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function product_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('product_category', 'Product Category', 'trim|required'); // check form validation
			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_product_name/empty', 'refresh'); //If form not  validate
			} else {

				$product_category= $this->input->post('product_category'); //get data from file to variable
				$product_name= $this->input->post('product_name'); //get data from file to variable
				$insert_data = array(
					'product_category' => $product_category,//insert data to column
					'product_name' => $product_name //insert data to column
				);
				$this->CommonModel->insert_data('create_product_name', $insert_data); //insert data to table
				redirect('ShowForm/create_product_name/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function supplier() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required'); // check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_supplier/empty', 'refresh'); //If form not  validate
			} else {

				$company_name= $this->input->post('company_name'); //get data from file to variable
				$mobile= $this->input->post('mobile');			 				//get data from file to variable
				$address= $this->input->post('address'); 						//get data from file to variable
				$previous_due= $this->input->post('previous_due'); 	//get data from file to variable
				$insert_data = array(
					'supplier_name' => $company_name,//insert data to column
					'mobile' => $mobile,   						 //insert data to column
					'address' => $address,						//insert data to column
					'previous_due' => $previous_due	 //insert data to column
				);
				$this->CommonModel->insert_data('create_supplier', $insert_data); 			//insert data to table
				redirect('ShowForm/create_supplier/created', 'refresh'); 		//after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	// Create Option End
	public function medicine_purchase_info() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('medicine_name', 'Medicine Name', 'trim|required'); // check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/medicine_purchase_info/empty', 'refresh'); //If form not  validate
			} else {

				$medicine= explode('#', $this->input->post('medicine_name')); //get data from file to variable
				$medicine_name = $medicine[0];
				$medicine_name_id = $medicine[1];

				//$generic= $this->input->post('generic');			 				//get data from file to variable
				$generic= explode('#', $this->input->post('generic')); //get data from file to variable
				$generic_name = $generic[0];
				$generic_id = $generic[1];

				//$presentation= $this->input->post('presentation'); 						//get data from file to variable
				$presentation= explode('#', $this->input->post('presentation')); //get data from file to variable
				$presentation_name = $presentation[0];
				$presentation_id = $presentation[1];

				//$supplier= $this->input->post('supplier'); 	//get data from file to variable
				$supplier= explode('#', $this->input->post('supplier')); //get data from file to variable
				$supplier_name = $supplier[0];
				$supplier__id = $supplier[1];

				$qty= $this->input->post('qty'); 	//get data from file to variable
				$unit_price= $this->input->post('unit_price'); 	//get data from file to variable
				$purchase_price= $this->input->post('purchase_price'); 	//get data from file to variable
				$unit_sales_price= $this->input->post('unit_sales_price'); 	//get data from file to variable
				$unit= $this->input->post('unit'); 	//get data from file to variable
				$purchase_paid= $this->input->post('purchase_paid'); 	//get data from file to variable
				$purchase_due= $this->input->post('purchase_due'); 	//get data from file to variable
				$ex_date= $this->input->post('ex_date'); 	//get data from file to variable
				$date = $this->input->post('date');
				$insert_data = array(
					'date' => $date,
					'medicine_name' => $medicine_name,//insert data to column
					'medicine_name_id' => $medicine_name_id,//insert data to column
					'generic_name' => $generic_name,   						 //insert data to column
					'generic_id' => $generic_id,
					'date'=>$date,
					'medicine_presentation' => $presentation_name,						//insert data to column
					'medicine_presentation_id' => $presentation_id,
					'supplier_name' => $supplier_name,   						 //insert data to column
					'supplier_id'=>$supplier__id,
					'qty' => $qty,
					'particulars' => 'Purchase Medicine',
					'unit_price' => $unit_price,   						 //insert data to column
					'purchase_price' => $purchase_price,
					'unit_sales_price' => $unit_sales_price,//insert data to column
					'unit' => $unit,   						 //insert data to column
					'purchase_paid' => $purchase_paid,
					'purchase_due' => $purchase_due,
					'expiredate' => $ex_date	 //insert data to column
				);
				$this->CommonModel->insert_data('insert_purchase_info', $insert_data); 			//insert data to table
				redirect('ShowForm/medicine_purchase_info/created', 'refresh'); 		//after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function edit_medicine_purchase_info($purchase_id) {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('medicine_name', 'Medicine Name', 'trim|required'); // check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/medicine_purchase_info/empty', 'refresh'); //If form not  validate
			} else {

				$medicine= explode('###', $this->input->post('medicine_name')); //get data from file to variable
				$medicine_name = $medicine[0];
				$medicine_name_id = $medicine[1];

				//$generic= $this->input->post('generic');			 				//get data from file to variable
				$generic= explode('###', $this->input->post('generic')); //get data from file to variable
				$generic_name = $generic[0];
				$generic_id = $generic[1];

				//$presentation= $this->input->post('presentation'); 						//get data from file to variable
				$presentation= explode('###', $this->input->post('presentation')); //get data from file to variable
				$presentation_name = $presentation[0];
				$presentation_id = $presentation[1];

				//$supplier= $this->input->post('supplier'); 	//get data from file to variable
				$supplier= explode('###', $this->input->post('supplier')); //get data from file to variable
				$supplier_name = $supplier[0];
				$supplier__id = $supplier[1];

				$qty= $this->input->post('qty'); 	//get data from file to variable
				$unit_price= $this->input->post('unit_price'); 	//get data from file to variable
				$purchase_price= $this->input->post('purchase_price'); 	//get data from file to variable
				$unit_sales_price= $this->input->post('unit_sales_price'); 	//get data from file to variable
				$unit= $this->input->post('unit'); 	//get data from file to variable
				$purchase_paid= $this->input->post('purchase_paid'); 	//get data from file to variable
				$purchase_due= $this->input->post('purchase_due'); 	//get data from file to variable
				$ex_date= $this->input->post('ex_date'); 	//get data from file to variable
				$date = $this->input->post('date');
				$update_data = array(
					'date' => $date,
					'medicine_name' => $medicine_name,//insert data to column
					'medicine_name_id' => $medicine_name_id,//insert data to column
					'generic_name' => $generic_name,   						 //insert data to column
					'generic_id' => $generic_id,
					'medicine_presentation' => $presentation_name,						//insert data to column
					'medicine_presentation_id' => $presentation_id,
					'supplier_name' => $supplier_name,   						 //insert data to column
					'supplier_id'=>$supplier__id,
					'qty' => $qty,
					'particulars' => 'Updated Purchase',
					'unit_price' => $unit_price,   						 //insert data to column
					'purchase_price' => $purchase_price,
					'unit_sales_price' => $unit_sales_price,//insert data to column
					'unit' => $unit,   						 //insert data to column
					'purchase_paid' => $purchase_paid,
					'purchase_due' => $purchase_due,
					'expiredate' => $ex_date	 //insert data to column
				);
				$this->CommonModel->update_data_onerow('insert_purchase_info', $update_data, 'purchase_id',$purchase_id);			//insert data to table
				redirect('ShowForm/medicine_purchase_info/edited', 'refresh'); 		//after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	//Insert Supplier Payment
	public function insert_purchase_payment() {
			if ($this->session->userdata('username') != '') { //Check Login
			$supplier_name = $this->input->post('s_supplier');
			$paid = $this->input->post('paid');
			$final_due = $this->input->post('final_due');
			$insert_data = array(
				'date' => date('Y-m-d'),
				'particulars' => "Payment",
				'supplier_name' => $supplier_name,
				'purchase_price' => 0,
				'purchase_paid' => $paid,
				'purchase_due' => $final_due
			);
			$this->CommonModel->insert_data('insert_purchase_info', $insert_data);
					redirect('ShowForm/supplier_payment/created', 'refresh'); 		//after inserting back to the page

			$data['all_value'] = $this->CommonModel->get_allinfo_byid('insert_purchase_info', 'supplier_name', $supplier_name);
			$data['old_due'] = $this->input->post('final_due');
			$data['supplier_name'] = $supplier_name;
			$this->load->view('inventory/show_purchase_due', $data);
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	// Create Staff
	public function create_staff() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('username', 'Username', 'trim|required'); // check form validation
//			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/manage_staff/empty', 'refresh'); //If form not  validate
			} else {

				$username= $this->input->post('username'); //get data from file to variable
				$password= md5($this->input->post('password')); //get data from file to variable
				$insert_data = array(
					'username' => $username,//insert data to column
					'password' => $password, //insert data to column
					'identity' => "Staff" //insert data to column
				);
				$this->CommonModel->insert_data('staff', $insert_data); //insert data to table
				redirect('ShowForm/manage_staff/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	// Create Staff
	public function edit_staff_info($id) {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('username', 'Username', 'trim|required'); // check form validation
//			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/manage_staff/empty', 'refresh'); //If form not  validate
			} else {

				$username= $this->input->post('username'); //get data from file to variable
				$password= md5($this->input->post('password')); //get data from file to variable
				$insert_data = array(
					'username' => $username,//insert data to column
					'password' => $password, //insert data to column
					'identity' => "Staff" //insert data to column
				);
				$this->CommonModel->update_data_onerow('staff', $insert_data, 'id', $id);//insert data to table
				redirect('ShowForm/manage_staff/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
