<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model
{
    public function get($id = null)
    {

        $this->db->from('tbl_anggota');
        $this->db->join('tbl_kk', 'tbl_anggota.id_kk = tbl_kk.id_kk', 'left');
        $this->db->join('tbl_warga', 'tbl_anggota.id_warga = tbl_warga.id_warga', 'left');

        if ($id != null) {
            $this->db->where('id_anggota', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params = [
            'id_kk'    => $post['id_kk'],
            'id_warga' => $post['id_warga'],
            'hubungan' => $post['hubungan'],
            

        ];
        $this->db->insert('tbl_anggota', $params);
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

        $this->db->where('id_anggota', $post['id_anggota']);
        $this->db->update('tbl_anggota', $params);
    }


    public function detail_anggota($id = null)
    {
        $query = $this->db->get_where('tbl_anggota', array('id_anggota' => $id))->row();
        return $query;
    }


    public function hapus($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('tbl_anggota');
    }
}
