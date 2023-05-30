<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }


    /* Fungsi untuk menentukan nama id yang login Admin atau bukan */
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function tambah($post)
    {
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['password'] = md5($post['password']);
        $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function ubah($post)
    {
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }
        $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }


    public function hapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
}
