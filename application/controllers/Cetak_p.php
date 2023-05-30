<?php 
 class Cetak_p extends CI_Controller{

 	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Warga_m');
    }
 	public function index(){

 	}

 	public function cetak(){
 		$id = $this->input->post('id_warga');
 		$data = [
 			'row'=> $this->Warga_m->get_id($id),
 			'tgl' => date("d/m/y")
 		];
 		$this->load->view('Surat/cetak_p', $data);
 	}
 }