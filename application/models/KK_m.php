<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kk_m extends CI_Model
{
    public function get($id = null)
    {

        $this->db->from('tbl_kk', 'tbl_warga', 'tbl_anggota');

        if ($id != null) {
            $this->db->where('id_kk', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params = [
            'no_kk'             => $post['no_kk'],
            'kepala_kel'        => $post['kepala_kel'],
            'kelurahan_desa'    => $post['kelurahan_desa'],
            'rt1'                => $post['rt1'],
            'rw1'                => $post['rw1'],
            'kecamatan'         => $post['kecamatan'],
            'kota'              => $post['kota'],
            'prov'              => $post['prov'],
        ];
        $this->db->insert('tbl_kk', $params);
    }

    public function ubah($post)
    {
        $params = [
            'no_kk'             => $post['no_kk'],
            'kepala_kel'        => $post['kepala_kel'],
            'kelurahan_desa'    => $post['kelurahan_desa'],
            'rt1'                => $post['rt1'],
            'rw1'                => $post['rw1'],
            'kecamatan'         => $post['kecamatan'],
            'kota'              => $post['kota'],
            'prov'              => $post['prov'],
        ];

        $this->db->where('id_kk', $post['id_kk']);
        $this->db->update('tbl_kk', $params);
    }
    


    public function hapus($id)
    {
        $this->db->where('id_kk', $id);
        $this->db->delete('tbl_kk');
    }
}
