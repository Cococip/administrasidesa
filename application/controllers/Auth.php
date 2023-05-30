<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
?>
            <!-- ini untuk merubah font alrt login -->
            <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
            <style>
                body {
                    font-family: "Helvetica Neue",
                        Helvetica,
                        Arial,
                        sans-serif;
                    font-size: 1.124em;
                    font-weight: normal;
                }
            </style>

            <body></body>
            <?php

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level,
                );
                $this->session->set_userdata($params);

                /*  Ini adalah sweetalrt login */
            ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Selamat, Login Berhasil'
                    }).then((result) => {
                        window.location = '<?= site_url('dashboard ') ?>';
                    })
                </script>
            <?php
            } else {
            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Failure',
                        text: 'Login Gagal, username / password salah'
                    }).then((result) => {
                        window.location = '<?= site_url('auth/login') ?>';
                    })
                </script>
<?php
            }
        }
    }

    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
