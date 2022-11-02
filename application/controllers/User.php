<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/beranda');
    }

    public function tentang()
    {
        $this->load->view('user/hlm_tentang');
    }

    public function produk()
    {
        $undangan['undangan'] = $this->db->get('undangan')->result_array();

        $this->load->view('user/hlm_produk', $undangan);
    }

    public function detail_undangan($id)
    {
        $undangan['undangan'] = $this->db->get_where('undangan', ['id_undangan' => $id])->result_array();

        $this->load->view('user/hlm_detail_produk', $undangan);
    }

    public function pesan_undangan($id)
    {
        $undangan['undangan'] = $this->db->get_where('undangan', ['id_undangan' => $id])->result_array();

        $this->load->view('user/hlm_pemesanan', $undangan);
    }

    public function buat_pesanan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pemesan', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            echo 'data kurang';
        } else {
            $nama_pemesan = $this->input->post('nama_pemesan', true);
            $no_telepon = $this->input->post('no_telepon', true);
            $pemesan_id_undangan = $this->input->post('id_undangan', true);
            $data = array(
                'nama_pemesan' => $nama_pemesan,
                'no_telepon' => $no_telepon,
                'pemesan_id_undangan' => $pemesan_id_undangan,
            );
            $this->db->insert('pemesan', $data);

            redirect('User/produk');
        }
    }
}
