<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller

{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'users/pengguna', $data);
    }


    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules(
            'konfpass',
            'Konfirmasi password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');

        /* ini adalah pesan untuk form */
        $this->form_validation->set_message('required', '%s masih kosong silahkan isi');
        $this->form_validation->set_message('min_length', '%s minimal 4 karakter atau huruf');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'users/tambah_pengguna',);
        } else {
            $post = $this->input->post(null, true);
            $this->user_m->tambah($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('pengguna');
        }
    }


    public function ubah($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|callback_username_check');
        /* ini kondisi opsional apabila password mau dirubah */
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[4]');
            $this->form_validation->set_rules(
                'konfpass',
                'Konfirmasi password',
                '|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        if ($this->input->post('konfpass')) {
            $this->form_validation->set_rules(
                'konfpass',
                'Konfirmasi password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }

        $this->form_validation->set_rules('level', 'Level', 'required');

        /* ini adalah pesan untuk form */
        $this->form_validation->set_message('required', '%s masih kosong silahkan isi');
        $this->form_validation->set_message('min_length', '%s minimal 4 karakter atau huruf');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'users/ubah_pengguna', $data);
            } else {
                echo "<script>alert('Data Tidak Ditemukan');";
                echo "window.location = '" . site_url('pengguna') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, true);
            $this->user_m->ubah($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            redirect('Pengguna');
        }
    }
    /* ini adalah callback */
    function username_check()
    {
        $post = $this->input->post(null, true);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '%s Ini sudah digunakan, Silahkan ganti');
            return false;
        } else {
            return true;
        }
    }


    /*  public function hapus()
    {
        $id = $this->input->post('user_id');
        $this->user_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('pengguna');
    } */

    public function hapus($id)
    {
        $this->user_m->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('pengguna');
    }
}
