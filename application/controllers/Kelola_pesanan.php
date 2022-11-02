<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_pesanan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Pesanan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->db->select('undangan.judul, pemesan.*');
        $this->db->from('pemesan');
        $this->db->join('undangan', 'undangan.id_undangan = pemesan.pemesan_id_undangan');
        $this->db->where('undangan.id_undangan = pemesan.pemesan_id_undangan');
        $data['pemesan'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/hlm_daftar_pesanan', $data);
        $this->load->view('templates/footer');
    }
}
