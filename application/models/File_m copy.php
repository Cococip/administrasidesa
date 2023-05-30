<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_m extends CI_Model
{
    public function get_file()
    {
        return $this->db->get('tbl_file')->result();
    }


    public function get_page($limite, $start, $file = null)
    {
        if ($file) {
            $this->db->like('nama', $file);
        }
        return $this->db->get('tbl_file', $limite, $start)->result();
    }


    public function CountAllFile()
    {
        return $this->db->get('tbl_file')->num_rows();
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
