<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pengaduan3_model extends CI_Model {
    public function Getpengaduan($where=''){
        $nik = $this->session->userdata('ses_nik');
    $query = "SELECT * FROM pengaduan JOIN masyarakat ON pengaduan.nik = masyarakat.nik JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan WHERE pengaduan.nik = '$nik'";
    return $this->db->query($query)->result_array();
    }
}
/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */