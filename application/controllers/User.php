<?php
class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $data['pengaduan'] = $this->pengaduan3_model->Getpengaduan();
    $this->load->view('user/v_dashboard',$data);
  }
  function pengaduan2(){
    redirect('pengaduan2');
    }
  }