<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tanggapan extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('tanggapan_model');
}
public function index()
{
$data['tanggapan'] = $this->tanggapan_model->GetTanggapan();
		$this->load->view('admin/v_tanggapan', $data);
}
public function edit_data_tanggapan($id_tanggapan)
{
$tanggapan=$this->tanggapan_model->GetTanggapan("where id_tanggapan = '$id_tanggapan'");
$data=array(
"id_tanggapan" => $tanggapan[0]['id_tanggapan'],
"id_pengaduan" => $tanggapan[0]['id_pengaduan'],
"tanggal" => $tanggapan[0]['tanggal'],
"tanggapan" => $tanggapan[0]['tanggapan'],
"proses" => $tanggapan[0]['proses'],
"id_petugas" => $tanggapan[0]['id_petugas'],
);
$this->load->view('admin/v_edit_tanggapan',$data);
}
public function do_update_tanggapan()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$id_tanggapan = $_POST['id_tanggapan'];
$id_pengaduan = $_POST['id_pengaduan'];
$tanggal = $_POST['tanggal'];
$tanggapan = $_POST['tanggapan'];
$proses = $_POST['proses'];
$id_petugas = $_POST['id_petugas'];
$data_update = array(
'id_tanggapan' => $id_tanggapan,
'id_pengaduan' => $id_pengaduan,
'tanggal' => $tanggal,
'tanggapan' => $tanggapan,
'proses' => $proses,
'id_petugas' => $id_petugas
);
$where = array ('id_tanggapan'=>$id_tanggapan);
$table = "tanggapan";
$hasil = $this->tanggapan_model->UpdateData($table,$data_update,$where);
if ($hasil>=1) {
redirect('tanggapan');
} else {
echo "insert data gagal";
}
}
public function delete_tanggapan($id_tanggapan)
{
$where = array('id_tanggapan' => $id_tanggapan);
$data = $this->tanggapan_model->DeleteData('tanggapan',$where);
if ($data>=1) {
redirect('tanggapan');
}
}
public function proses_registrasi(){
		$data=[
			'id_tanggapan' => $this->input->post('id_tanggapan'),
			'id_pengaduan' => $this->input->post('id_pengaduan'),
			'tanggal' => $this->input->post('tanggal'),
			'tanggapan' => $this->input->post('tanggapan'),
			'proses' => $this->input->post('proses'),
			'id_petugas' => $this->input->post('id_petugas'),
		];
		$insert=$this->tanggapan_model->Register($data);
		if($insert){
			redirect('tanggapan');
		}else{
			redirect('tanggapan');
		}
	}
}