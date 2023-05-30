<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datang_m extends CI_Model
{
    
     public function get($id = null)
    {
        $this->db->select('tbl_datang. *, tbl_warga.nik as nik, tbl_warga.nama as nama');
        $this->db->from('tbl_datang');
        $this->db->join('tbl_warga', 'tbl_warga.id_warga = tbl_warga.id_warga');

        if ($id != null) {
            $this->db->where('id_datang', $id);
        }
        $query = $this->db->get();
        return $query;
    }

   
    public function tambah($post)
    {
        $params = [
            'id_warga'        => $post['warga'],
            'nik_datang'          => $post['nik_datang'],
            'nama_datang'  => $post['nama_datang'],
            'jekel'        => $post['jekel'],
            'tgl_datang'   => $post['tgl_datang'],
        ];
        $this->db->where('id_datang', $post['id_datang']);
        $this->db->insert('tbl_datang', $params);
    }

    public function ubah($post)
    {
        $params = [
           'id_warga'        => $post['warga'],
            'nik_datang'          => $post['nik_datang'],
            'nama_datang'  => $post['nama_datang'],
            'jekel'        => $post['jekel'],
            'tgl_datang'   => $post['tgl_datang'],
        ];

        $this->db->where('id_datang', $post['id_datang']);
        $this->db->update('tbl_datang', $params);
    }


    public function hapus($id)
    {
        $this->db->where('id_datang', $id);
        $this->db->delete('tbl_datang');
    }

    public function get_id($id)
    {
        $query = $this->db->get_where('tbl_datang', ['nik'=>$id])->row();
        return $query;
    }

    public function akk($id)
    {
        $this->db->get_where('tbl_datang', ['nik'=>$id])->row();
        return $query;
    }
}
