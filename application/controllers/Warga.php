<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['warga_m', 'kk_m']);
    }

    public function index()
    {
        $data['row'] = $this->warga_m->get();
        $this->template->load('template', 'warga/data_warga', $data);
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $warga = new stdClass();
        $warga->id_warga          = null;
        $warga->nik               = null;
        $warga->hubungan          = null;
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



        $query_kk = $this->kk_m->get();

        $data = array(
            'page'  => 'tambah',
            'row'   => $warga,
            'kk'    => $query_kk,

        );
        $this->template->load('template', 'warga/form_warga', $data);
    }
    public function ubah($id)
    {
        $query = $this->warga_m->get($id);
        if ($query->num_rows() > 0) {
            $warga = $query->row();
            $query_kk = $this->kk_m->get();
            $data = array(
                'page' => 'ubah',
                'row' => $warga,
                'kk'    => $query_kk,

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
            $this->warga_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->warga_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('warga');
    }


    public function detail($id)
    {
        $this->load->model('Warga_m');
        $detail = $this->warga_m->detail_warga($id);
        $data['detail'] = $detail;

        $this->template->load('template', 'warga/detail_warga', $data);
    }



    public function hapus($id)
    {
        $this->warga_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('warga');
    }
}
