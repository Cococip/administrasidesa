<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['kematian_m', 'warga_m']);
    }

    public function index()
    {
        $data['row'] = $this->kematian_m->get();
        $this->template->load('template', 'sirkulasi/data_kematian', $data);
    }

    /* stgClass untuk membuat satu form menjadi dua form sekaligus */
    public function tambah()
    {
        $sirkulasi = new stdClass();
        $sirkulasi->id_warga  = null;
        $sirkulasi->id_mendu          = null;
        $sirkulasi->nik              = null;
        $sirkulasi->nama              = null;
        $sirkulasi->tgl_mendu         = null;
        $sirkulasi->sebab         = null;

        $query_warga = $this->warga_m->get();
        
        $id = isset($_POST['id_mendu']) ? $_POST['id_mendu'] : '';
        

        $data = array(
            'page'  => 'tambah',
            'row'   => $sirkulasi,
            'warga'    => $query_warga,

        );
        $this->template->load('template', 'sirkulasi/form_kematian', $data);
    }

    public function ubah($id)
    {
        $query = $this->kematian_m->get($id);
        if ($query->num_rows() > 0) {
            $sirkulasi = $query->row();

            $query_warga = $this->warga_m->get();

            $data = array(
                'page'  => 'ubah',
                'row'   => $sirkulasi,
                'warga'    => $query_warga,

            );
            $this->template->load('template', 'sirkulasi/form_kematian', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('kematian') . "';</script>";
        }
    }


    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['tambah'])) {
            $this->kematian_m->tambah($post);
        } elseif (isset($post['ubah'])) {
            $this->kematian_m->ubah($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('kematian');
    }

    public function hapus($id)
    {
        $this->kematian_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('kematian');
    }
}
