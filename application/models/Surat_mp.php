<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_mp extends CI_Model
{
    public function get()
    {
        $table = 'tbl_warga';
        // if ($id != null) {
        //     $this->db->where('id_warga', $id);
        // }
        $query = $this->db->get($table)->result();
        return $query;
    }

    public function tambah($post)
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


    public function hapus($id)
    {
        $this->db->where('id_warga', $id);
        $this->db->delete('tbl_warga');
    }
}
