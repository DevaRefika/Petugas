<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Masyarakat extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('Masyarakat_model');
}
public function index()
{
$data['masyarakat'] = $this->Masyarakat_model->GetMasyarakat();
		$this->load->view('admin/v_masyarakat', $data);
}
public function edit_data_masyarakat($nik)
{
$masyarakat=$this->masyarakat_model->GetMasyarakat("where nik = '$nik'");
$data=array(
"nik" => $masyarakat[0]['nik'],
"nama" => $masyarakat[0]['nama'],
"username" => $masyarakat[0]['username'],
"telp" => $masyarakat[0]['telp'],
);
$this->load->view('admin/v_edit_masyarakat',$data);
}
public function do_update_masyarakat()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$telp = $_POST['telp'];
$data_update = array(
'nik' => $nik,
'nama' => $nama,
'username' => $username,
'telp' => $telp
);
$where = array ('nik'=>$nik);
$table = "masyarakat";
$hasil = $this->masyarakat_model->UpdateData($table,$data_update,$where);
if ($hasil>=1) {
redirect('masyarakat');
} else {
echo "insert data gagal";
}
}
public function delete_masyarakat($nik)
{
$where = array('nik' => $nik);
$data = $this->masyarakat_model->DeleteData('masyarakat',$where);
if ($data>=1) {
redirect('masyarakat');
}
}
public function proses_registrasi(){
		$data=[
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'telp' => $this->input->post('telp'),
		];
		$insert=$this->masyarakat_model->Register($data);
		if($insert){
			redirect('masyarakat');
		}else{
			redirect('masyarakat');
		}
	}
}