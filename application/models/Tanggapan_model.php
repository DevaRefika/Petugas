<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tanggapan_model extends CI_Model {
public function GetTanggapan($where=''){
$data=$this->db->query('SELECT * from tanggapan JOIN pengaduan ON tanggapan.id_pengaduan = 
pengaduan.id_pengaduan JOIN masyarakat ON pengaduan.nik = masyarakat.nik JOIN petugas 
ON tanggapan.id_petugas = petugas.id_petugas '.$where);
return $data->result_array();
}

public function InsertTanggapan($tabelName,$data)	
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
		$table="tanggapan";
		return $this->db->insert($table,$data);
	}
}
/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */