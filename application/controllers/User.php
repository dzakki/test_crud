<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if (empty($_SESSION['logged_in'])) {
			redirect('auth');
		}
	}
	public function index()
	{
		redirect('user/users');
	}
	public function update($id)
	{
		$this->user_model->update($id);
		echo "<script> alert('berhasil update data');  window.location.href='".base_url('user/users')."'; </script>";	
	}
	public function user($id)
	{
		$data['user']  = $this->user_model->get('id', $id);
		$this->load->view('templates/header');
		$this->load->view('users/update', $data);
		$this->load->view('templates/footer');
	}
	public function users()
	{
		// var_dump($this->user_model->get());
		$data['users']  = $this->user_model->get();
		$this->load->view('templates/header');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}
	public function delete($id)
	{
		$this->user_model->delete($id);
		echo "<script> alert('berhasil delete data');  window.location.href='".base_url('user/users')."'; </script>";	
	}
}
