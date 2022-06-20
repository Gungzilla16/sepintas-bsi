<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('v_registrasi');
	}

	public function aksi()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama Pengguna','required', [
			'required' => 'Nama Harus diisi!!'
		]);
		$this->form_validation->set_rules('email','Email Pengguna','required', [
			'required' => 'Email Harus diisi!!'
		]);
		$this->form_validation->set_rules('username','Username Pengguna','required', [
			'required' => 'Username Harus diisi!!'
		]);
		$this->form_validation->set_rules('password','Password Pengguna','required|min_length[8]',[
			'required' => 'Password Harus diisi!!',
			'min_length' => 'Password Terlalu Pendek!'
		]);
		$this->form_validation->set_rules('level','Level Pengguna','required',[
			'required' => 'Level Pengguna harus dipilih!'
		]);
		$this->form_validation->set_rules('status','Status Pengguna','required', [
			'required' => 'Status Pengguna harus dipilih!'
		]);

		if($this->form_validation->run() != false){

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');
			$status = $this->input->post('status');

			$data = array(
				'pengguna_nama' => $nama,
				'pengguna_email' => $email,
				'pengguna_username' => $username,
				'pengguna_password' => $password,
				'pengguna_level' => $level,
				'pengguna_status' => $status
			);

			$this->m_data->insert_data($data,'pengguna');
			//alihkan halaman ke halaman login dan muncul pesan registrasi berhasil
			redirect(base_url().'login?alert=registrasi');	

		}else{
			$this->load->view('v_registrasi');
		}
	}	

}