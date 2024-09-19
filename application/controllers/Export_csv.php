<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_csv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('export_csv_model');
	}

//	function index()
//	{
//		$data['$all_value'] = $this->export_csv_model->fetch_data();
//		$this->load->view("Create_Option/supplier",$data);
//	}

	function export()
	{
		$file_name = 'supplier_details_on_'.date('d-m-Y').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv;");

		// get data
		$got_data = $this->export_csv_model->fetch_data();

		// file creation
		$file = fopen('php://output', 'w'); //create file to write data

		$header = array("Company Name","Mobile","Address","Previous Due");
		fputcsv($file, $header);
		foreach ($got_data->result_array() as $key => $value)
		{
			fputcsv($file, $value);
		}
		fclose($file);
		exit;
	}


}
