<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'user_id' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Login Berhasil!');
					window.location='".site_url('dashboard')."';
				</script>";
			} else {
				echo "<script>
					alert('Login Gagal, Username atau Password Salah!');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		} 
	}

	public function logout()
	{
		$params = array('user_id', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

	public function ganti_password()
	{
	$this->load->view('ganti_password');
	}

	public function ganti_password_process()
	{
	$this->load->model('user_m');
	$pass_baru = $this->input->post('pass_baru');
	$ulang_pass = $this->input->post('ulang_pass');

	$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required');
	$this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required|matches[pass_baru]');

	$this->form_validation->set_message('required', '%s Wajib Diisi!');
	$this->form_validation->set_message('matches', 'Password Tidak Sama!');

	if($this->form_validation->run() == FALSE ) {
	$this->load->view('ganti_password');
	}else{
		$data = array('password' =>sha1($pass_baru), 'is_edit' => 1);
		$id = array('user_id' => $this->session->userdata('user_id'));

		$this->user_m->update_password($id, $data, 'user');
		// $this->session->sess_destroy();
		// if($this->db->affected_rows() > 0) {
				echo "<script>alert('Password Berhasil Diubah!');</script>";
			// }
			echo "<script>window.location='".site_url('Dashboard')."';</script>";
		}
	}


}
