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
                    <i class="fa fa-edit"></i> <?= ucfirst($page) ?> Data Kematian
                </h3>
            </div>
            <form action="<?= site_url('kematian/proses') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <input type="hidden" name="id_mendu" value="<?= $row->id_mendu ?>">
                        <div class="col-sm-3">
                            <select name="warga" class="form-control">
                                <option value="">- Pilih -</option>
                                <?php foreach ($warga->result() as $key => $data) { ?>
                                <option value="<?= $data->id_warga ?>"> <?= $data->nik ?>-<?= $data->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal mendu</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl_mendu" name="tgl_mendu" value="<?= $row->tgl_mendu ?>" placeholder="Tanggal mendu" required>
                        </div>
                     </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">sebab</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="sebab" name="sebab" value="<?= $row->sebab ?>" placeholder="Tanggal mendu" required>
                        </div>
                     </div>



                    <!--  cek lagi selec error -->
                    <!-- <?= $data->id_warga == $row->id_kk ? "selected" : null ?> -->

                </div>
                <div class="card-footer">
                    <input type="submit" name="<?= $page ?>" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('dala') ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
    </div>
</section>