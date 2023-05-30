<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['datang_m', 'kk_m', 'warga_m']);
    }

    public function index()
    {
        $data['row'] = $this->datang_m->get();
        $this->template->load('template', 'datang/data_datang', $data);
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $datang = new stdClass();
        $datang->id_datang       = null;
        $datang->nik_datang      = null;
        $datang->nama_datang     = null;
        $datang->jekel           = null;
        $datang->tgl_datang      = null;
        $datang->pelapor         = null;
        $datang->id_warga        = null;

        $query_warga = $this->warga_m->get();

        $data = array(
            'page'  => 'tambah',
            'row'   => $datang,
            'warga'    => $query_warga,

        );
        $this->template->load('template', 'datang/form_datang', $data);
    }

    public function ubah($id)
    {
        $query = $this->datang_m->get($id);
        if ($query->num_rows() > 0) {
            $datang = $query->row();

            $query_warga = $this->warga_m->get();

            $data = array(
                'page'  => 'ubah',
                'row'   => $datang,
                'warga'    => $query_warga,

            );
            $this->template->load('template', 'datang/form_datang', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('datang') . "';</script>";
        }
    }


    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['tambah'])) {
            $this->datang_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->datang_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('datang');
    }

    public function hapus($id)
    {
        $this->datang_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('datang');
    }
}
