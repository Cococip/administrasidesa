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
                    <i class="fa fa-edit"></i> <?= ucfirst($page) ?> Data Warga
                </h3>
            </div>
            <form action="<?= site_url('warga/proses') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <input type="hidden" name="id_warga" value="<?= $row->id_warga ?>">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $row->nik ?>" placeholder="NIK" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>" placeholder="Nama Penduduk" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">TTL</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select name="jk" value="<?= $row->jk ?>" id="jk" class="form-control">
                                <option value="">- Pilih -</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Desa / Kelurahan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $row->kelurahan ?>" placeholder="Desa / Kelurahan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">RT/RW</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $row->rt ?>" placeholder="RT" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $row->rw ?>" placeholder="RW" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="agama" name="agama" value="<?= $row->agama ?>" placeholder="Agama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-3">
                            <select name="kawin" value="<?= $row->kawin ?>" id="kawin" class="form-control">
                                <option value="">- Pilih -</option>
                                <option>Sudah</option>
                                <option>Belum</option>
                                <option>Cerai Mati</option>
                                <option>Cerai Hidup</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $row->pekerjaan ?>" placeholder="Pekerjaan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NO KK / Kep Keluarga</label>
                        <div class="col-sm-3">
                            <select name="kk" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php foreach ($kk->result() as $key => $data) { ?>
                                    <option value="<?= $data->id_kk ?>"> <?= $data->no_kk ?>-<?= $data->kepala_kel ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" name="<?= $page ?>" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('warga') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
    </div>
</section>