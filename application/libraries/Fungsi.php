<!-- Fungsi untuk menentukan nama id yang login Admin atau bukan dan panggil di autoload -->
<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }


    public function count_warga()
    {
        $this->ci->load->model('warga_m');
        return $this->ci->warga_m->get()->num_rows();
    }

    public function count_kk()
    {
        $this->ci->load->model('kk_m');
        return $this->ci->kk_m->get()->num_rows();
    }



    /*  Aktifkan setelah viewnya dibuat  */

    /*  public function count_pendatang()
    {
        $this->ci->load->model('pendatang_m');
        return $this->ci->pendatang_m->get()->num_rows();
    }

    public function count_tetap()
    {
        $this->ci->load->model('tetap_m');
        return $this->ci->tetap_m->get()->num_rows();
    } */
}
