<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('tbl_mendu. *, tbl_warga.nik as nik, tbl_warga.nama as nama');
        $this->db->from('tbl_mendu');
        $this->db->join('tbl_warga', 'tbl_warga.id_warga = tbl_mendu.id_warga');

        if ($id != null) {
            $this->db->where('id_mendu', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params = [
            'id_warga'        => $post['warga'],
            'tgl_mendu'       => $post['tgl_mendu'],
            'sebab'           => $post['sebab'],
        ];
        $this->db->insert('tbl_mendu', $params);

        $data = [
            'status' => 'Meninggal',
        ]; 
        $this->db->where('id_warga', $post['warga']);
        $this->db->update('tbl_warga', $data);


    }

    public function ubah($post)
    {
        $params = [
            'id_warga'        => $post['warga'],
            'tgl_mendu'       => $post['tgl_mendu'],
            'sebab'           => $post['sebab'],
        ];

        $this->db->where('id_mendu', $post['id_mendu']);
        $this->db->update('tbl_mendu', $params);
    }


    public function detail_mendu($id = null)
    {
        $query = $this->db->get_where('tbl_mendu', array('id_mendu' => $id))->row();
        return $query;
    }


    public function hapus($id)
    {
        $this->db->where('id_mendu', $id);
        $this->db->delete('tbl_mendu');
    }

    public function get_id($id)
    {
        $query = $this->db->get_where('tbl_mendu', ['id_mendu'=>$id])->row();
                 $this->db->join('tbl_warga', 'tbl_warga.id_warga = tbl_mendu.id_mendu');
                 $this->db->where('tbl_warga.id_mendu', $id);
        return $query;
    }

    /* public function join()
    {
        $this->db->select('*');
        $this->db->from('tbl_mendu');
        $this->db->join('tbl_warga', 'warga.id_warga = tbl_warga.id_warga', 'left');
        $query = $this->db->get();

        return $query();
    } */
}
