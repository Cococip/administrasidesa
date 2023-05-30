     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6 ">
                     <h1>Ubah Pengguna</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="Dashboard"><i class="fa fa-home"></i></a></li>
                         <li class="breadcrumb-item active">Ubah Pengguna</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <!-- /.card -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Ubah Data Pengguna</h3>
                         </div>
                         <!-- /.card-header -->

                         <!-- form start -->
                         <form role="form" action="" method="post">
                             <div class="card-body">
                                 <!-- ini adalah inputan -->
                                 <div class="form-group">
                                     <label>Nama</label>
                                     <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                                     <input type="text" name="nama" value="<?= $this->input->post('nama') ?? $row->nama ?>" class="form-control" placeholder="Masukan nama">
                                     <span class="text-danger"><?= form_error('nama'); ?></span>
                                 </div>
                                 <div class="form-group">
                                     <label>Username</label>
                                     <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control" placeholder="Masukan username">
                                     <span class="text-danger"><?= form_error('username'); ?></span>
                                 </div>
                                 <div class="form-group">
                                     <label>Password</label> <small>(Biarkan kosong bila tidak diganti)</small>
                                     <input type="password" name="password" value="<?= $this->input->post('password') ?>" class="form-control" placeholder="Password">
                                     <span class="text-danger"><?= form_error('password'); ?></span>
                                 </div>
                                 <div class="form-group">
                                     <label>Konfirmasi Password</label>
                                     <input type="password" name="konfpass" value="<?= $this->input->post('konfpass') ?>" class="form-control" placeholder="Password harus sama">
                                     <span class="text-danger"><?= form_error('konfpass'); ?></span>
                                 </div>
                                 <div class="form-group">
                                     <label>Alamat</label>
                                     <textarea name="alamat" class="form-control" placeholder="Masukan alamat"><?= $this->input->post('alamat') ?? $row->alamat ?></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>Level</label>
                                     <select name="level" class="form-control">
                                         <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level  ?>
                                         <option value="1">Admin</option>
                                         <option value="2" <?= $level == 2 ? 'selected' : null ?>>Ketua RT</option>
                                     </select>
                                 </div>
                                 <!-- /.card-body -->
                                 <div class="card-footer">
                                     <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                     <button type="reset" class="btn btn-secondary"> Batal</button>
                                     <a href="<?= site_url('pengguna') ?>" class="btn btn-warning">
                                         <i class="fa fa-undo"></i> Kembali</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <!-- /.card -->
                 </div>
             </div>
         </div>
     </section>