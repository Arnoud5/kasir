<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');		
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->user_m->get_data('user')->result();
		$data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('name' ,'Name', 'required');
		$this->form_validation->set_rules('username' ,'Username', 'required|is_unique[user.username]');
		// $this->form_validation->set_rules('password' ,'Password', 'required');
		// $this->form_validation->set_rules('passconf' ,'Konfirmasi Password', 'required|matches[password]',
		// 	array('matches' => '%s Tidak Sama!')
		// );
		$this->form_validation->set_rules('address' ,'Address', 'required');
		$this->form_validation->set_rules('level' ,'Level', 'required');

		$this->form_validation->set_message('required', '%s Wajib Diisi!');
		$this->form_validation->set_message('is_unique', '%s Sudah Terdaftar!');


		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'user/user_form_add');
		}

		else {
		$name		= $this->input->post('name');
		$username		= $this->input->post('username');
		// $password		= $this->input->post('password');
		$address		= $this->input->post('address');
		$level		= $this->input->post('level');

		$data = array (
			'name'		=>$name,
			'username'	=>$username,
			'password'	=>sha1(123456),
			'address'		=>$address,
			'level'		=>$level
			);
			$this->user_m->insert_data($data,'user');
			// $post = $this->input->post('null', TRUE);
			// $this->user_m->add($post);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!');
		}
			redirect('user');
		}

	}


	public function edit($id)
	{
		$this->form_validation->set_rules('name' ,'Name', 'required');
		$this->form_validation->set_rules('username' ,'Username', 'required|callback_username_check');
		// if($this->input->post('password')){
		// $this->form_validation->set_rules('password' ,'Password');
		// $this->form_validation->set_rules('passconf' ,'Konfirmasi Password', 'matches[password]',
		// 	array('matches' => '%s Tidak Sama!')
		// );
		// }

		// if($this->input->post('passconf')){
		// $this->form_validation->set_rules('passconf' ,'Konfirmasi Password', 'matches[password]',
		// 	array('matches' => '%s Tidak Sama!')
		// );
		// }
		$this->form_validation->set_rules('address' ,'Address', 'required');
		$this->form_validation->set_rules('level' ,'Level', 'required');

		$this->form_validation->set_message('required', '%s Wajib Diisi!');
		$this->form_validation->set_message('is_unique', '%s Sudah Terdaftar!');


		if ($this->form_validation->run() == FALSE) {
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
			$this->template->load('template', 'user/user_form_edit', $data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan!');";
		echo "window.location='".site_url('user')."';</script>";
		}

		}
		else {
			
			$id = $this->input->post('user_id');
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			// $password = md5($this->input->post('password'));
			$address = $this->input->post('address');
			$level = $this->input->post('level');
			
			$data = array(
				'name' => $name,
				'username' => $username,
				// 'password' => md5(123456),
				'address' => $address,
				'level' => $level


			);
			$where = array (
				'user_id'=> $id
			);
			$this->user_m->update_data('user', $data, $where);
			// $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			//   Data User Berhasil diedit!
			//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			//   <span aria-hidden="true">&times;</span>
			//   </button>
			// </div>');
			// redirect('admin/data_user');

			// $post = $this->input->post('null', TRUE);
			// $this->user_m->edit($post);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data User Berhasil Diupdate!');
		}
			redirect('user');
		}

	}

	function username_check() {
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '%s Sudah Digunakan!');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function reset(){
		
		$id = $this->input->post('user_id');
			$data = array(			
				'password' => sha1(123456)				
			);
			$where = array (
				'user_id'=> $id
			);
			$this->user_m->update_data('user', $data, $where);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Password Berhasil Direset!');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		
	}

	public function del()
	{
		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data User Berhasil Dihapus!');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";

	}
}
