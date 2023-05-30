<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('file_m');
    }

    public function index()
    {
        $data['file'] = $this->file_m->get_file();
        $this->template->load('template', 'warga/file', $data);
    }

    /* function get_json()
    {
        $this->load->library('datatables');
        $this->datatables->add_column('no', 'ID-$1', 'id_file');
        $this->datatables->select('id_file, nama_file, nama, type, ukuran');
        $this->datatables->add_column('action', anchor('file/download/$1', 'Download', array('class' => 'btn btn-success btn-sm')) . " " .
            anchor('file/hapus/$1', 'Hapus', array('class' => 'btn btn-danger btn-sm')), 'id_file');
        $this->datatables->from('tbl_file');
        return print_r($this->datatables->generate());
    } */


    public function create()
    {
        $this->template->load('template', 'warga/upload');
    }

    public function proses()
    {
        $config['upload_path'] = './upload';
        $config['allowed_types'] = 'gif|jpg|png|pdf|rar|zip';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {

            $error = array('error' => $this->upload->display_errors());
            $this->load->view('file', $error);
        } else {
            $data['nama_file'] = $this->upload->data('file_name');
            $data['nama'] = $this->input->post('nama');
            $data['type'] = $this->upload->data('file_ext');
            $data['ukuran'] = $this->upload->data('file_size');
            $this->db->insert('tbl_file', $data);
            redirect('file');
        }
    }

    public function download($id)
    {
        /* $this->load->helper('download'); */
        $filedata = $this->db->query("SELECT * FROM tbl_file WHERE id_file='$id'");
        foreach ($filedata->result() as $data_file) {
            $file = 'upload/' . $data_file->nama_file;
            force_download($file, NULL);
        }
    }



    /* variabel nama di sini adalah nama_file pada db */
    public function hapus($id)
    {
        $data = $this->file_m->getFileByID($id)->row();
        $nama = './upload/' . $data->nama_file;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->file_m->hapus($id);
            redirect('file');
        } else {
            echo "Gagal";
        }
    }
}
