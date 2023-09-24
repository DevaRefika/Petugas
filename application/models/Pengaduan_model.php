<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pengaduan_model extends CI_Model {
public function Getpengaduan($where=''){
$data=$this->db->query('SELECT * FROM pengaduan JOIN masyarakat ON pengaduan.nik = masyarakat.nik '.$where);
return $data->result_array();
}

public function Insertpengaduan($tabelName,$data)	
{
$data = $this->db->insert($tabelName,$data);
return $data;
}
public function UpdateData($tableName,$data,$where){
$data = $this->db->update($tableName,$data,$where);
return $data;
}
public function DeleteData($tableName,$where){
$data = $this->db->delete($tableName,$where);
return $data;
}
public function Register($data){
		$table="pengaduan";
		return $this->db->insert($table,$data);
	}
}
/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */