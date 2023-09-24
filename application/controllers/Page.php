<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('admin/v_dashboard');
  }
 function masyarakat(){
    redirect('masyarakat');
    }
  function pengaduan(){
    redirect('pengaduan');
    }
  function tanggapan(){
    redirect('tanggapan');
    }
  }