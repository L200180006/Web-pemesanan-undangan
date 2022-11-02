<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_undangan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Undangan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $undangan['undangan'] = $this->db->get('undangan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/hlm_daftar_undangan', $undangan);
        $this->load->view('templates/footer');
    }

    public function tambah_undangan()
    {
        $data['title'] = 'Tambahkan Undangan';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim|is_unique[undangan.judul]', [
            'is_unique' => 'This judul has already registered!'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|min_length[3]', [
            'min_length' => 'Harga tidak boleh kosong atau 0!'
        ]);

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/hlm_tambah_undangan');
            $this->load->view('templates/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
            $gambar_1 = $_FILES['gambar_1']['name'];
            $judul = $this->input->post('judul', true);
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
            $harga = $this->input->post('harga', true);
            if ($gambar) {
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']     = '2048';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    echo "Gagal mengunggah gambar!";
                    die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            if ($gambar_1) {
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']     = '2048';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_1')) {
                    echo "Gagal mengunggah gambar!";
                    die();
                } else {
                    $gambar_1 = $this->upload->data('file_name');
                }
            }
            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'gambar' => $gambar,
                'gambar_1' => $gambar_1,
                'harga' => $harga,
            );
            $this->db->insert('undangan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Undangan berhasil ditambahkan.</div>');

            redirect('Kelola_undangan');
            //cek jika ada gambar yang diupload

        }
    }

    public function hapus_undangan($id)
    {
        $this->db->where('id_undangan', $id);
        $this->db->delete('undangan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Undangan berhasil dihapus.</div>');
        redirect('Kelola_undangan');
    }

    public function edit_undangan($id)
    {
        $data['title'] = 'Edit Undangan';


        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])
            ->row_array();
        $undangan['undangan'] = $this->db->get_where('undangan', ['id_undangan' => $id])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/hlm_ubah_undangan', $undangan);
        $this->load->view('templates/footer');
    }

    public function detail_undangan($id)
    {
        $undangan['undangan'] = $this->db->get_where('undangan', ['id_undangan' => $id])->result_array();

        $this->load->view('user/hlm_detail_produk', $undangan);
    }
    public function update_undangan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim|is_unique[undangan.judul]', [
            'is_unique' => 'This judul has already registered!'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|min_length[3]', [
            'min_length' => 'Harga tidak boleh kosong atau 0!'
        ]);

        $dataUpdate = [
            'judul' => ($this->input->post('judul', true)),
            'deskripsi' => ($this->input->post('deskripsi', true)),
            'gambar' => 'default.jpg',
            'harga' => ($this->input->post('harga', true)),
        ];

        $this->db->where('id_undangan', $this->input->post('id_undangan'));
        $this->db->update('undangan', $dataUpdate);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Undangan berhasil diubah.</div>');

        redirect('Kelola_undangan');
    }
}
