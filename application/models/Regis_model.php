<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_model extends CI_Model{
	public function register($data){
		$table="masyarakat";
		return $this->db->insert($table,$data);
	}
}