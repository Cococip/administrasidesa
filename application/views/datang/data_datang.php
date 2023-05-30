     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">

         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->

                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Data Pendatang</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="table-responsive">
                                 <div>
                                     <a href="<?= site_url('datang/tambah') ?>" class="btn btn-primary">
                                         <i class="fa fa-user-plus"></i> Tambah Pendatang</a>
                                 </div>
                                 <br>
                                 <table id="example1" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>NIK</th>
                                             <th>Nama</th>
                                             <th>Jenis Kelamin</th>
                                             <th>Tanggal</th>
                                             <th>pelapor</th>
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>

                                     <tbody>
                                         <!-- untuk mengambil data dari database -->
                                         <?php $no = 1;
                                            foreach ($row->result() as $key => $data) { ?>
                                             <tr>
                                                 <td><?= $no++ ?></td>
                                                 <td><?= $data->nik_datang ?></td>
                                                 <td><?= $data->nama_datang ?></td>
                                                 <td><?= $data->jekel?></td>
                                                 <td><?= $data->tgl_datang ?></td>
                                                 <td><?= $data->nama ?></td>
                                                 <td align="center">
                                                     <a href="<?= site_url('datang/ubah/' . $data->id_datang) ?>" type="button" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                     <a href="<?= site_url('datang/hapus/' . $data->id_datang) ?>" onclick="return confirm('Apakah anda yakin ?')" type="button" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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