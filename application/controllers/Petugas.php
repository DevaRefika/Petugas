<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Petugas extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('Petugas_model');
}
public function index()
{
$data['petugas'] = $this->petugas_model->GetPetugas();
		$this->load->view('admin/v_petugas', $data);
}
public function edit_data_petugas($id_petugas)
{
$petugas=$this->petugas_model->GetPetugas("where id_petugas = '$id_petugas'");
$data=array(
"id_petugas" => $petugas[0]['id_petugas'],
"nama_petugas" => $petugas[0]['nama_petugas'],
"username" => $petugas[0]['username'],
"telp" => $petugas[0]['telp'],
"level" => $petugas[0]['level'],
);
$this->load->view('admin/v_edit_petugas',$data);
}
public function do_update_petugas()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$telp = $_POST['telp'];
$data_update = array(
'id_petugas' => $id_petugas,
'nama_petugas' => $nama_petugas,
'username' => $username,
'telp' => $telp
);
$where = array ('id_petugas'=>$id_petugas);
$table = "petugas";
$hasil = $this->petugas_model->UpdateData($table,$data_update,$where);
if ($hasil>=1) {
redirect('petugas');
} else {
echo "insert data gagal";
}
}
public function delete_petugas($id_petugas)
{
$where = array('id_petugas' => $id_petugas);
$data = $this->petugas_model->DeleteData('petugas',$where);
if ($data>=1) {
redirect('petugas');
}
}
public function proses_registrasi(){
		$data=[
			'nama_petugas' => $this->input->post('nama_petugas'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'telp' => $this->input->post('telp'),
			'level' => $this->input->post('level'),
		];
		$insert=$this->petugas_model->Register($data);
		if($insert){
			redirect('petugas');
		}else{
			redirect('petugas');
		}
	}
}