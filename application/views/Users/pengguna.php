     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Pengguna Sistem</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="Dashboard"><i class="fa fa-home"></i></a></li>
                         <li class="breadcrumb-item active">Pengguna Sistem</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- <?php $this->view('alert') ?> -->
         <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->

                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title"><i class="nav-icon fas fa-users"></i> Data Pengguna</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="table-responsive">
                                 <div>
                                     <a href="<?= site_url('pengguna/tambah') ?>" class="btn btn-primary">
                                         <i class="fa fa-user-plus"></i>Tambah Data</a>
                                 </div>
                                 <br>
                                 <table id="example1" class="table table-bordered table-striped">
                                     <thead class="bg-info">
                                         <tr class="text-center">
                                             <th>No</th>
                                             <th>Username</th>
                                             <th>Nama</th>
                                             <th>Alamat</th>
                                             <th>Level</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>

                                     <tbody class="table-sm">
                                         <!-- untuk mengambil data dari database -->
                                         <?php $no = 1;
                                            foreach ($row->result() as $key => $data) { ?>
                                             <tr class="text-center">
                                                 <td style="width:5%;"><?= $no++ ?></td>
                                                 <td><?= $data->username ?></td>
                                                 <td><?= $data->nama ?></td>
                                                 <td><?= $data->alamat ?></td>
                                                 <td><?= $data->level == 1 ? "Admin" : "Ketua RT" ?></td>
                                                 <td>
                                                     <a href="<?= site_url('pengguna/ubah/' . $data->user_id) ?>" type="button" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                     <a href="<?= site_url('pengguna/hapus/' . $data->user_id) ?>" id="hapus" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                                                     <!-- <form action="<?= site_url('pengguna/hapus') ?>" method="post">
                                                         <a href="<?= site_url('pengguna/ubah/' . $data->user_id) ?>" type="button" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                         <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                                         <button onclick="return confirm('Apakah anda yakin ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                             <i class="fa fa-trash"></i>
                                                         </button>
                                                     </form> -->
                                                 </td>
                                             </tr>
                                         <?php
                                            } ?>
                                     </tbody>
                                 </table>
                             </div>
                             <!-- /.card-body -->
                         </div>
                         <!-- /.card -->
                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.container-fluid -->
     </section>