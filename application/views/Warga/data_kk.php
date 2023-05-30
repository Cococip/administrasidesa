     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">

         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->

                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title"><i class="nav-icon fas fa-table"></i> Data KK</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="table-responsive">
                                 <div>
                                     <a href="<?= site_url('kk/tambah') ?>" class="btn btn-primary ">
                                         <i class="fa fa-user-plus"></i> Tambah Data</a>
                                 </div>
                                 <br>
                                 <table id="example1" class="table table-bordered table-striped ">
                                     <thead class="bg-info">
                                         <tr class="text-center">
                                             <th>No</th>
                                             <th>NO KK</th>
                                             <th>Kepala Keluarga</th>
                                             <th>Alamat</th>
                                             <!-- <th>Anggota KK</th> -->
                                             <th>Aksi</th>
                                         </tr>
                                     </thead>

                                     <tbody class="table-sm">
                                         <!-- untuk mengambil data dari database -->
                                         <?php $no = 1;
                                            foreach ($row->result() as $key => $data) { ?>
                                             <tr class="text-center">
                                                 <td style="width:5%;"><?= $no++ ?></td>
                                                 <td><?= $data->no_kk ?></td>
                                                 <td><?= $data->kepala_kel ?></td>
                                                 <td>
                                                     <?= $data->kelurahan_desa ?>,
                                                     RT
                                                     <?= $data->rt1 ?>/ RW
                                                     <?= $data->rw1 ?>
                                                 </td>
                                                 <td>
                                                    <a href="<?= site_url('kk/hubungan/' . $data->id_kk) ?>" type="button" title="Ubah" class="btn btn-info btn-sm"><i class="fa fa-user"></i></a>
                                                     <a href="<?= site_url('kk/ubah/' . $data->id_kk) ?>" type="button" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                     <a href="<?= site_url('kk/hapus/' . $data->id_kk) ?>" id="hapus" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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