<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model
{
//	Insert Query
	function insert_data($table_name, $data) {
		$query = $this->db->insert($table_name, $data);
		return $query;
	}
	//fetch all data
	function get_all_info($table_name) {
		$query = $this->db->get($table_name);
		return $query->result();
	}
	//fetch all data not null
	function get_all_info_not_null($table_name,$coloum) {
//		$query = $this->db->get($table_name);
//		$this->db->where('medicine_name is NOT NULL', NULL, FALSE);
		$this->db->select('*');
		$this->db->where($coloum != NULL);
		$this->db->get($table_name);
	}
	//Delete row
	function delete_info($table_id, $deleted_id, $table_name) {
		$this->db->where($table_id, $deleted_id);
		$query = $this->db->delete($table_name);
		return $query;
	}
	function get_distinct_value_where($column_name, $table_name, $column_with_value_array){
		$this->db->select($column_name);
		$this->db->distinct();
		$this->db->where($column_with_value_array);
		$query=$this->db->get($table_name);
		return $query->result();
	}
	function get_all_info_by_array($table_name, $column_with_value_array){
		$s = $this->db->where($column_with_value_array);
		$this->db->where($column_with_value_array);
		$query=$this->db->get($table_name);
		return $query->result();
	}
	function get_allinfo_byid($table_name, $where_column, $where_column_value,$order="",$order_dir="asc"){
		$this->db->where($where_column, $where_column_value);
		if(!empty($order))
		$this->db->order_by($order,$order_dir);
		$query=$this->db->get($table_name);
		return $query->result();
	}
	function find_last_id($column_name, $table_name) {
		$this->db->insert_id($column_name);
		$query = $this->db->get($table_name);
		if ($query->num_rows() < 1) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	function group_by_data_where($table_name, $where_array, $distinct_column)
	{
		$this->db->where($where_array);
		$this->db->group_by($distinct_column);
		$query = $this->db->get($table_name);
		return $query->result();
	}
	function check_value_get_data($table_name, $column_with_value_array){
		$this->db->where($column_with_value_array);
		$query=$this->db->get($table_name);
		if($query->num_rows() == 0){
			return FALSE;
		}
		else{
			return $query->result();
		}
	}
	function update_data_onerow($table_name, $data, $where_column, $where_column_value){
		$this->db->where($where_column, $where_column_value);
		$this->db->update($table_name, $data);
	}

	function get_array_column($qry, $val = '', $key = ''){
		$query = $this->db->query($qry);
		$data = array();
		if($query->num_rows() > 0){
			$result = $query->result_array();
			$data = array_column($result, $val, $key);
		}
		return $data;
	}

}
