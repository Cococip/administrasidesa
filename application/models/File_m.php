<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_m extends CI_Model
{
    public function get_file()
    {
        return $this->db->get('tbl_file')->result();
    }


    public function hapus($id)
    {
        $this->db->where('id_file', $id);
        return $this->db->delete('tbl_file');
    }

    public function getFileByID($id)
    {
        $this->db->where('id_file', $id);
        return $this->db->get('tbl_file');
    }
}
