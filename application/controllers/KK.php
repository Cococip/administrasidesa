<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KK extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('kk_m');
    }

    public function index()
    {
        $data['row'] = $this->kk_m->get();
        $this->template->load('template', 'warga/data_kk', $data);
    }

    public function hubungan($id)
    {
        $query = $this->kk_m->get($id);
        if ($query->num_rows() > 0) {
            $kk   = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $kk
            );
            $this->template->load('template', 'warga/data_anggota', $data);
        }
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $kk = new stdClass();
        $kk->id_kk           = null;
        $kk->no_kk           = null;
        $kk->kepala_kel      = null;
        $kk->kelurahan_desa  = null;
        $kk->rt1              = null;
        $kk->rw1              = null;
        $kk->kecamatan       = null;
        $kk->kota            = null;
        $kk->prov            = null;
        $data = array(
            'page' => 'tambah',
            'row'  => $kk
        );
        $this->template->load('template', 'warga/form_kk', $data);
    }

    public function ubah($id)
    {
        $query = $this->kk_m->get($id);
        if ($query->num_rows() > 0) {
            $kk   = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $kk
            );
            $this->template->load('template', 'warga/form_kk', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('kk') . "';</script>";
        }
    }


    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['tambah'])) {
            $this->kk_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->kk_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('kk');
    }


    public function hapus($id)
    {
        $this->kk_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('kk');
    }
}
