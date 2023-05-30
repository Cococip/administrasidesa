<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Surat_m');
    }

    public function index()
    {
        $data = [
            'rows'=> $this->Surat_m->get()
        ];
        $this->template->load('template', 'Surat/surat_domisili', $data);
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $warga = new stdClass();
        $warga->id_warga          = null;
        $warga->nik               = null;
        $warga->nama              = null;
        $warga->tempat_lahir      = null;
        $warga->tgl_lahir         = null;
        $warga->jk                = null;
        $warga->kelurahan         = null;
        $warga->rt                = null;
        $warga->rw                = null;
        $warga->agama             = null;
        $warga->kawin             = null;
        $warga->pekerjaan         = null;
        $data = array(
            'page' => 'tambah',
            'row' => $warga
        );
        $this->template->load('template', 'warga/form_warga', $data);
    }

    public function ubah($id)
    {
        $query = $this->Surat_m->get($id);
        if ($query->num_rows() > 0) {
            $warga = $query->row();
            $data = array(
                'page' => 'ubah',
                'row' => $warga
            );
            $this->template->load('template', 'warga/form_warga', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('warga') . "';</script>";
        }
    }


    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['tambah'])) {
            $this->Surat_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->Surat_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Disimpan')</script>";
        }
        echo "<script>window.location = '" . site_url('warga') . "';</script>";
    }


    public function hapus($id)
    {
        $this->Surat_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus')</script>";
        }
        echo "<script>window.location = '" . site_url('warga') . "';</script>";
    }
}
