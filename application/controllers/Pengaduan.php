<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengaduan extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('Pengaduan_model');
}
public function index()
{
$data['pengaduan'] = $this->pengaduan_model->Getpengaduan();
		$this->load->view('admin/v_pengaduan', $data);
}
public function tanggapi($id_pengaduan)
{
$pengaduan=$this->pengaduan_model->Getpengaduan("where id_pengaduan = '$id_pengaduan'");
$data=array(
"id_pengaduan" => $pengaduan[0]['id_pengaduan'],
"tanggal" => $pengaduan[0]['tanggal'],
"nik" => $pengaduan[0]['nik'],
"isi_laporan" => $pengaduan[0]['isi_laporan'],
);
$this->load->view('admin/v_entry_tanggapan',$data);
}
}