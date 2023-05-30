<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid"></div>
</section>
<!-- Main content -->
<section class="content">
    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
    <div class="container-fluid">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-edit"></i> <?= ucfirst($page) ?> Data Pendatang
                </h3>
            </div>
            <form action="<?= site_url('datang/proses') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <input type="hidden" name="id_datang" value="<?= $row->id_datang ?>">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_datang" name="nama_datang" value="<?= $row->nama_datang ?>" placeholder="Nama pendatang" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal datang</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_datang" name="tgl_datang" value="<?= $row->tgl_datang ?>" placeholder="Tanggal datang" required>
                        </div>
                     </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nik</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nik_datang" name="nik_datang" value="<?= $row->nik_datang ?>" placeholder="NIK" required>
                        </div>
                     </div>
            
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                             <select name="jekel" class="form-control" required>

                              <?php if($datang['jekel'] == "LK"){ ?>
                                <option value="LK" selected>Laki-laki</option>
                                <option value="PR">Perempuan</option>
                              <?php }
                              else{ ?>
                                <option value="LK">Laki-laki</option>
                                <option value="PR" selected>Perempuan</option>
                              <?php } ?>

                            </select>
                          </div>
                            
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pelapor</label>
                        <div class="col-sm-3">
                            <select name="warga" class="form-control">
                                <?php foreach ($warga->result() as $key => $data) { ?>
                                    <option value="<?= $data->id_warga ?>"><?= $data->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!--  cek lagi selec error -->
                    <!-- <?= $data->id_warga == $row->id_kk ? "selected" : null ?> -->

                </div>
                <div class="card-footer">
                    <input type="submit" name="<?= $page ?>" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('datang') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
    </div>
</section>