<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dala extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['dala_m', 'kk_m']);
    }

    public function index()
    {
        $data['row'] = $this->dala_m->get();
        $this->template->load('template', 'sirkulasi/data_lahir', $data);
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $sirkulasi = new stdClass();
        $sirkulasi->id_lahir          = null;
        $sirkulasi->nama              = null;
        $sirkulasi->tgl_lh         = null;
        $sirkulasi->jenkel         = null;
        $sirkulasi->id_kk             = null;

        $query_kk = $this->kk_m->get();

        $data = array(
            'page'  => 'tambah',
            'row'   => $sirkulasi,
            'kk'    => $query_kk,

        );
        $this->template->load('template', 'sirkulasi/form_lahir', $data);
    }

    public function ubah($id)
    {
        $query = $this->dala_m->get($id);
        if ($query->num_rows() > 0) {
            $sirkulasi = $query->row();

            $query_kk = $this->kk_m->get();

            $data = array(
                'page'  => 'ubah',
                'row'   => $sirkulasi,
                'kk'    => $query_kk,

            );
            $this->template->load('template', 'sirkulasi/form_lahir', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('dala') . "';</script>";
        }
    }


    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['tambah'])) {
            $this->dala_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->dala_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('dala');
    }

    public function hapus($id)
    {
        $this->dala_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('dala');
    }
}
