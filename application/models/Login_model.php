<?php
class Login_model extends CI_Model{
	//cek nip dan password user
	function auth_petugas($username,$password){
		$query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password level
	function auth_masyarakat($username,$password){
		$query=$this->db->query("SELECT * FROM masyarakat WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
