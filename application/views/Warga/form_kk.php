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
                    <i class="fa fa-edit"></i> <?= ucfirst($page) ?> Data kk
                </h3>
            </div>
            <form action="<?= site_url('kk/proses') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NO KK</label>
                        <input type="hidden" name="id_kk" value="<?= $row->id_kk ?>">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?= $row->no_kk ?>" placeholder="NO KK" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kepala Keluarga</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kepala_kel" name="kepala_kel" value="<?= $row->kepala_kel ?>" placeholder="Kepala Kelurga" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Desa / Kelurahan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan_desa" value="<?= $row->kelurahan_desa ?>" placeholder="Desa / Kelurahan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">RT / RW</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rt1" name="rt1" value="<?= $row->rt1 ?>" placeholder="RT" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rw1" name="rw1" value="<?= $row->rw1 ?>" placeholder="RW" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $row->kecamatan ?>" placeholder="Kecamatan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kabupaten / Kota</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kota" name="kota" value="<?= $row->kota ?>" placeholder="Kabupaten / Kota" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="prov" name="prov" value="<?= $row->prov ?>" placeholder="Provinsi" required>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" name="<?= $page ?>" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('kk') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
    </div>
</section>