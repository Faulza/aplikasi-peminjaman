<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('url');
		
		// if ($this->session->userdata('username')=="") {
		// 	redirect('login');
		// }
	
		//  else if(!$this->session->userdata('level') =="admin"){
		//  	redirect(base_url("menu/guru"));
		//  }
	}

	function index(){
		$data['judul']="Beranda";
		$this->load->view('admin/header-admin',$data);
		$this->load->view('admin/aside-admin',$data);
		$this->load->view('admin/beranda-admin',$data);
		$this->load->view('admin/footer-admin',$data);
	}
	function barang(){
		$data['judul']="Barang";
		$this->load->view('admin/header-admin',$data);
		$this->load->view('admin/aside-admin',$data);
		$this->load->view('admin/barang-admin',$data);
		$this->load->view('admin/footer-admin',$data);
	}
}
?>