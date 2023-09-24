<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_user=$this->login_model->auth_petugas($username,$password);

        if($cek_user->num_rows() > 0){
						$data=$cek_user->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='admin'){ //Akses admin
		            $this->session->set_userdata('akses','admin');
		            $this->session->set_userdata('ses_id',$data['id_petugas']);
		            $this->session->set_userdata('ses_nama',$data['nama_petugas']);
		            redirect('page');
		         }else if($data['level']=='petugas'){
		            $this->session->set_userdata('akses','petugas');
					$this->session->set_userdata('ses_id',$data['id_petugas']);
		            $this->session->set_userdata('ses_nama',$data['nama_petugas']);
		            redirect('page');
		           }
		         }else{
		         	$cek_masyarakat=$this->login_model->auth_masyarakat($username,$password);
		         	if($cek_masyarakat->num_rows() > 0){
		         	$data=$cek_masyarakat->row_array();
		         		$this->session->set_userdata('masuk',TRUE);
		            $this->session->set_userdata('akses','masyarakat');
					$this->session->set_userdata('ses_nik',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('user');
				}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }
    function petugas(){
    redirect('petugas');
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
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}