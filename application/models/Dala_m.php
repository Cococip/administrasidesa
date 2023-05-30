<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dala_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('tbl_lahir. *, tbl_kk.no_kk as no_kk, tbl_kk.kepala_kel as kepala');
        $this->db->from('tbl_lahir');
        $this->db->join('tbl_kk', 'tbl_kk.id_kk = tbl_lahir.id_kk');

        if ($id != null) {
            $this->db->where('id_lahir', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params = [
            'id_kk'        => $post['kk'],
            'nama'         => $post['nama'],
            'tgl_lh'       => $post['tgl_lh'],
            'jenkel'       => $post['jenkel'],
        ];
        $this->db->where('id_lahir', $post['id_lahir']);
        $this->db->insert('tbl_lahir', $params);
    }

    public function ubah($post)
    {
        $params = [
            'id_kk'        => $post['kk'],
            'nama'         => $post['nama'],
            'tgl_lh'       => $post['tgl_lh'],
            'jenkel'       => $post['jenkel'],
        ];

        $this->db->where('id_lahir', $post['id_lahir']);
        $this->db->update('tbl_lahir', $params);
    }


    public function detail_lahir($id = null)
    {
        $query = $this->db->get_where('tbl_lahir', array('id_lahir' => $id))->row();
        return $query;
    }


    public function hapus($id)
    {
        $this->db->where('id_lahir', $id);
        $this->db->delete('tbl_lahir');
    }


    function warga_lk()
    {
        $this->db->select('*');
        $this->db->from('tbl_lahir');
        $this->db->where('jenkel', 'Laki-Laki');

        return $this->db->get()->num_rows();
    }

    function warga_pr()
    {
        $this->db->select('*');
        $this->db->from('tbl_lahir');
        $this->db->where('jenkel', 'Perempuan');

        return $this->db->get()->num_rows();
    }

    public function get_id($id)
    {
        $query = $this->db->get_where('tbl_lahir', ['id_lahir'=>$id])->row();
                 $this->db->join('tbl_kk', 'tbl_kk.id_warga = tbl_warga.id_lahir');
                 $this->db->where('tbl_warga.id_lahir', $id);
        return $query;
    }

    /* public function join()
    {
        $this->db->select('*');
        $this->db->from('tbl_lahir');
        $this->db->join('tbl_kk', 'warga.id_kk = tbl_kk.id_kk', 'left');
        $query = $this->db->get();

        return $query();
    } */
}
