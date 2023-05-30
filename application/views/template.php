<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDAWA | RT006</title>
    <link rel="icon" href="<?= base_url() ?>assets/dist/img/note.jpg">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


</head>



<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">
                        <font color="black">
                            <b>SISTEM INFORMASI DATA WARGA RT/RW 006/013</b>
                        </font>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="Dashboard" class="brand-link">
                <img src="<?= base_url() ?>assets/dist/img/note.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text text-bold">SIDAWA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-1 mb-2 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>assets/dist/img/icon.jpg" class="img-circle elevation-2" alt=" User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $this->fungsi->user_login()->nama ?></a>
                        <p class="badge badge-success"></i><?= $this->fungsi->user_login()->username ?></p>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                        <li class="nav-header">MAIN NAVIGATION</li>
                        <li class="nav-item">
                            <a href="Dashboard" class="nav-link">
                                <i class=" nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Kelola Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('warga') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Warga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('KK') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kartu Keluarga</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Sirkulasi Data Warga
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('dala') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Lahir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="kematian" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kematian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="datang" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pendatang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Kelola Surat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('surat') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Domisili</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Su-Ket Pengantar</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?= site_url('file') ?>" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Kelola Dokumen
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Cetak surat
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('surat') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Surat Domisili</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('surat_p') ?>" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Surat Pengantar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">SETTING</li>

                        <!-- ini adalah untuk membatasi tampilan -->
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="nav-item">
                                <a href="<?= site_url('Pengguna') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Pengguna Sistem
                                    </p>
                                </a>
                            </li>
                        <?php } ?>


                        <!-- <li class="nav-item">
                            <a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="<?= site_url('auth/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="<?= site_url('auth/logout') ?>" id="keluar" class="nav-link">
                                <i class="nav-icon fas fa-arrow-circle-right"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= $contents  ?>
        </div>




        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Cococip</b> TI
            </div>
            <strong>Copyright &copy; 2022 <a href="">RT/RW 006/013</a>.</strong>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- Sweetalert2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>


    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: flash
            })
        }

        $(document).on('click', '#hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda Yakin ?',
                text: "Data Akan Dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })

        $(document).on('click', '#keluar', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda Yakin ?',
                text: "Tinggalkan Halaman Ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
    </script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/dist/js/demo.js"></script> -->
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>