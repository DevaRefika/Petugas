<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengaduan2 extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('Pengaduan2_model');
}
public function index()
{
$data['pengaduan'] = $this->pengaduan2_model->Getpengaduan();
		$this->load->view('user/v_pengaduan', $data);
}
public function edit_data_pengaduan($id_pengaduan)
{
$pengaduan=$this->pengaduan2_model->Getpengaduan("where id_pengaduan = '$id_pengaduan'");
$data=array(
"id_pengaduan" => $pengaduan[0]['id_pengaduan'],
"tanggal" => $pengaduan[0]['tanggal'],
"nik" => $pengaduan[0]['nik'],
"isi_laporan" => $pengaduan[0]['isi_laporan'],
);
$this->load->view('user/v_edit_pengaduan',$data);
}
public function do_update_pengaduan()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$id_pengaduan = $_POST['id_pengaduan'];
$tanggal = $_POST['tanggal'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$proses = $_POST['proses'];
$data_update = array(
'id_pengaduan' => $id_pengaduan,
'tanggal' => $tanggal,
'nik' => $nik,
'isi_laporan' => $isi_laporan,
);
$where = array ('id_pengaduan'=>$id_pengaduan);
$table = "pengaduan";
$hasil = $this->pengaduan2_model->UpdateData($table,$data_update,$where);
if ($hasil>=1) {
redirect('pengaduan2');
} else {
echo "insert data gagal";
}
}
public function delete_pengaduan($id_pengaduan)
{
$where = array('id_pengaduan' => $id_pengaduan);
$data = $this->pengaduan2_model->DeleteData('pengaduan',$where);
if ($data>=1) {
redirect('pengaduan2');
}
}
public function proses_registrasi(){
			$id_pengaduan = $this->input->post('id_pengaduan', true);
			$tanggal = $this->input->post('tanggal', true);
			$nik = $this->input->post('nik', true);
			$isi_laporan = $this->input->post('isi_laporan', true);
			$foto = $_FILES['foto']['name'];
        if ($foto) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/';

                $this->load->library('upload', $config);

                $this->upload->do_upload('foto');
                  
            }
            $data = [
            'id_pengaduan' => $id_pengaduan,
			'tanggal' => $tanggal,
			'nik' => $nik,
			'isi_laporan' => $isi_laporan,
			'foto' => $foto,
		];
		$insert=$this->pengaduan2_model->Register($data);
		if($insert){
			redirect('pengaduan2');
		}else{
			redirect('pengaduan2');
		}
	}
}