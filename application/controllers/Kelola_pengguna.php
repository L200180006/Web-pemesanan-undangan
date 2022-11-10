<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_pengguna extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pengguna';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->model('admin');
		$userListdata['user'] = $this->admin->getAlluser();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/beranda', $userListdata);
		$this->load->view('templates/footer');
	}

	public function tambah_pengguna()
	{
		$data['title'] = 'Tambahkan Pengguna';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'This username has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/hlm_tambah_pengguna');
			$this->load->view('templates/footer');
		} else {
			$dataInsert = [
				'name' => ($this->input->post('name', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			];

			$this->db->insert('user', $dataInsert);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Account has been created.</div>');

			redirect('Kelola_pengguna');
		}
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been deleted.</div>');
		redirect('Kelola_pengguna');
	}

	public function edit_user($id)
	{
		$data['title'] = 'Ubah Pengguna';


		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
			->row_array();
		$userListdata['user'] = $this->db->get_where('user', ['id' => $id])->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/hlm_ubah_pengguna', $userListdata);
		$this->load->view('templates/footer');
	}

	public function update_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|');
		$dataUpdate = [
			'name' => ($this->input->post('name', true)),
			'username' => htmlspecialchars($this->input->post('username', true)),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $dataUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Account has been changed.</div>');

		redirect('Kelola_pengguna');
	}
}
