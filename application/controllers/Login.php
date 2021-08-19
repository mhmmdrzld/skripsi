<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login', 'model');
	}

	public function index()
	{
		$this->load->view('login/login');
	}

	public function daftar()
	{
		$this->load->view('login/daftar');
	}

	public function proses_login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$level = $this->input->post('level', TRUE);
		$hashed_password = md5($password);

		$sql = $this->model->proses_login($username, $hashed_password, $level);
		$cek = $sql->num_rows();
		if ($cek > 0) {
			$dt = $sql->row();
			$data = array(
				'id_akun' => $dt->id,
				'username' => $dt->username,
				'level' => $dt->level,
				'status' => 'Login'
			);
			$this->session->set_userdata($data);

			if ($dt->level === 'Operator') {
				$query_get = $this->model->get_data_sekolah($dt->id);
				$dt_sekolah = $query_get->row();
				if ($dt_sekolah->status === 'Belum Verifikasi') {
					$this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Mohon Ditunggu Proses Verifikasi, Harap Cek Secara Berkala !!']);
					session_destroy();
					redirect('Login');
				} elseif ($dt_sekolah->status === 'Tidak Aktif') {
					$this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Akun Sudah Tidak Aktif !!']);
					session_destroy();
					redirect('Login');
				}
			}
			$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Anda Berhasil Masul']);
			redirect('Dashboard');
		} else {
			$this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Nama Pengguna atau Kata Sandi Salah !!']);
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Anda Berhasil Logout']);
		session_destroy();
		redirect('Login');
	}

	public function proses_daftar()
	{

		$data = $this->input->post(null, true);
		$result =  $this->model->proses_daftar($data);
		if ($result) {
			$this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Anda Berhasil Login']);
			redirect('Dashboard');
		}
	}

	public function result()
	{
		$this->load->view('login/result');
	}
}
