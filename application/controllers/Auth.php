<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index(){
		if (!empty($_SESSION['logged_in'])) {
			redirect('user/users');
		}
		$this->load->view('auth/index');
	}
	public function login()
	{
		$password = $this->user_model->get('username', $this->input->post('username'))['password'];
		// print_r($username);
		// die();
		if (!empty($password)) {
			if ($password == $this->input->post('password')) {
				$session = array('logged_in'     => true );

            	$this->session->set_userdata($session);
				redirect('user/users');
			}else{
				echo "<script> alert('password atau username salah');  window.location.href='".base_url('auth/index')."'; </script>";	
			}
		}else{
			echo "<script> alert('username tidak ada');  window.location.href='".base_url('auth/index')."'; </script>";	
		}

	}
	public function logout()
	{
		$this->user_model->logout();
		echo "<script> alert('berhasil logout');  window.location.href='".base_url('auth/index')."'; </script>";
	}

	public function register()
	{
		$this->user_model->insert();
		echo "<script> alert('berhasil');  window.location.href='".base_url('auth/index')."'; </script>";
	}
}
