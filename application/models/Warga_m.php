<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('tbl_warga. *, tbl_kk.no_kk as no_kk, tbl_kk.kepala_kel as kepala');
        $this->db->from('tbl_warga');
        $this->db->join('tbl_kk', 'tbl_kk.id_kk = tbl_warga.id_kk');

        if ($id != null) {
            $this->db->where('id_warga', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params = [
            'nik'          => $post['nik'],
            'id_kk'        => $post['kk'],
            'nama'         => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tgl_lahir'    => $post['tgl_lahir'],
            'jk'           => $post['jk'],
            'kelurahan'    => $post['kelurahan'],
            'rt'           => $post['rt'],
            'rw'           => $post['rw'],
            'agama'        => $post['agama'],
            'kawin'        => $post['kawin'],
            'pekerjaan'    => $post['pekerjaan'],
        ];
        $this->db->where('id_warga', $post['id_warga']);
        $this->db->insert('tbl_warga', $params);
    }

     public function ubah($post)
    {
        $params = [
            'nik'          => $post['nik'],
            'nama'         => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tgl_lahir'    => $post['tgl_lahir'],
            'jk'           => $post['jk'],
            'kelurahan'    => $post['kelurahan'],
            'rt'           => $post['rt'],
            'rw'           => $post['rw'],
            'agama'        => $post['agama'],
            'kawin'        => $post['kawin'],
            'pekerjaan'    => $post['pekerjaan'],
        ];

        $this->db->where('id_warga', $post['id_warga']);
        $this->db->update('tbl_warga', $params);
    }


    public function detail_warga($id = null)
    {
        $query = $this->db->get_where('tbl_warga', array('id_warga' => $id))->row();
        return $query;
    }


    public function hapus($id)
    {
        $this->db->where('id_warga', $id);
        $this->db->delete('tbl_warga');
    }


    function warga_lk()
    {
        $this->db->select('*');
        $this->db->from('tbl_warga');
        $this->db->where('jk', 'Laki-Laki');

        return $this->db->get()->num_rows();
    }

    function warga_pr()
    {
        $this->db->select('*');
        $this->db->from('tbl_warga');
        $this->db->where('jk', 'Perempuan');

        return $this->db->get()->num_rows();
    }

    public function get_id($id)
    {
        $query = $this->db->get_where('tbl_warga', ['nik'=>$id])->row();
                 $this->db->join('tbl_kk', 'tbl_kk.id_warga = tbl_warga.id_warga');
                 $this->db->where('tbl_warga.id_warga', $id);
        return $query;
    }

    /* public function join()
    {
        $this->db->select('*');
        $this->db->from('tbl_warga');
        $this->db->join('tbl_kk', 'warga.id_kk = tbl_kk.id_kk', 'left');
        $query = $this->db->get();

        return $query();
    } */
}
