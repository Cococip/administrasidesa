     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">

         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <?php $this->view('alert') ?>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <!-- /.card -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">
                                 <i class="fa fa-user"></i> Detail Warga
                             </h3>
                             </h3>
                             <div class="card-tools">
                             </div>
                         </div>
                         <div class="card-body p-0">
                             <table class="table">
                                 <tbody>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>NIK</b>
                                         </td>
                                         <td>: <?= $detail->nik ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Nama</b>
                                         </td>
                                         <td>: <?= $detail->nama ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>TTL</b>
                                         </td>
                                         <td>:
                                             <?= $detail->tempat_lahir ?>
                                             /
                                             <?= $detail->tgl_lahir ?>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Jenis Kelamin</b>
                                         </td>
                                         <td>: <?= $detail->jk ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Alamat</b>
                                         </td>
                                         <td>:
                                             <?= $detail->kelurahan ?>, RT
                                             <?= $detail->rt ?>/ RW
                                             <?= $detail->rw ?>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Agama</b>
                                         </td>
                                         <td>: <?= $detail->agama ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Status Kawin</b>
                                         </td>
                                         <td>: <?= $detail->kawin ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 150px">
                                             <b>Pekerjaan</b>
                                         </td>
                                         <td>: <?= $detail->pekerjaan ?></td>
                                     </tr>
                                     <tr>
                                         <td style="width: 200px">
                                             <b>ID KK</b>
                                         </td>
                                         <td>:
                                             <?= $detail->id_kk ?>
                                         </td>
                                     </tr>


                                 </tbody>
                             </table>
                             <div class="card-footer">
                                 <a href="<?= site_url('warga') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>