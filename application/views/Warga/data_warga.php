     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">

         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- <?php $this->view('alert') ?> -->
         <!-- pesan sukses -->
         <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>

         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->

                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title"><i class="nav-icon fas fa-table"></i> Data Warga</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="table-responsive">
                                 <div>
                                     <a href="<?= site_url('warga/tambah') ?>" class="btn btn-primary">
                                         <i class="fa fa-user-plus"></i> Tambah Data</a>
                                 </div>
                                 <br>
                                 <table id="example1" class="table table-bordered table-striped ">
                                     <thead class="bg-info">
                                         <tr class="text-center">
                                             <th>No</th>
                                             <th>NIK</th>
                                             <th>Nama</th>
                                             <th>Jenis Kelamin</th>
                                             <th>Alamat</th>
                                             <th>No KK - Kepala Kelurga</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>

                                     <tbody class="table-sm">
                                         <!-- untuk mengambil data dari database -->
                                         <?php $no = 1;
                                            foreach ($row->result() as $key => $data) { ?>
                                             <tr class="text-center">
                                                 <td style="width:5%;"><?= $no++ ?></td>
                                                 <td><?= $data->nik ?></td>
                                                 <td><?= $data->nama ?></td>
                                                 <td><?= $data->jk ?></td>
                                                 <td>
                                                     <?= $data->kelurahan ?>,
                                                     RT
                                                     <?= $data->rt ?>/ RW
                                                     <?= $data->rw ?>
                                                 </td>
                                                 <td>
                                                     <?= $data->no_kk ?>-<?= $data->kepala ?>
                                                 </td>
                                                 <td>
                                                     <!-- <form action="<?= site_url('warga/hapus') ?>" method="post"> -->
                                                     <a href="<?= site_url('warga/detail/' . $data->id_warga) ?>" title="Detail" class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i></a>
                                                     <a href="<?= site_url('warga/ubah/' . $data->id_warga) ?>" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                     <a href="<?= site_url('warga/hapus/' . $data->id_warga) ?>" id="hapus" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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