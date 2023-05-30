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
                    <i class="fa fa-edit"></i> <?= ucfirst($page) ?> Data Kelahiran
                </h3>
            </div>
            <form action="<?= site_url('dala/proses') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <input type="hidden" name="id_lahir" value="<?= $row->id_lahir ?>">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>" placeholder="Nama Bayi" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?= $row->tgl_lh ?>" placeholder="Tanggal Lahir" required>
                        </div>
                     </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select name="jenkel" value="<?= $row->jenkel ?>" id="jenkel" class="form-control">
                                <?php { ?>
                                    <option value="<?= $row->jenkel ?>"> <?= $row->jenkel ?></option>
                                <?php } ?>
                                <option value="LK">Laki Laki</option>
                                <option value="PR">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NO KK / Kep Keluarga</label>
                        <div class="col-sm-3">
                            <select name="kk" class="form-control">
                                <?php foreach ($kk->result() as $key => $data) { ?>
                                    <option value="<?= $data->id_kk ?>"> <?= $data->no_kk ?>-<?= $data->kepala_kel ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>



                    <!--  cek lagi selec error -->
                    <!-- <?= $data->id_kk == $row->id_kk ? "selected" : null ?> -->

                </div>
                <div class="card-footer">
                    <input type="submit" name="<?= $page ?>" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('dala') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
    </div>
</section>