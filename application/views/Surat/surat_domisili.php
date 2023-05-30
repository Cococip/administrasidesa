<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid"></div>
</section>
<!-- /.container-fluid -->
<!-- Main content -->
<section class="content">
    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
    <div class="container-fluid">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class=""></i> Cetak Surat
                </h3>
            </div>
            <form action="<?= site_url('Cetak_dom/cetak')?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pilih Surat</label>
                        <div class="col-sm-6">
                            <select name="id_warga" id="id_warga" class="form-control select2bs4" required>
                                <option selected="selected">- Pilih Data -</option>
                                <?php foreach ($rows as $row) : ?>
                                    <option value="<?= $row->nik?>"><?= $row->nama?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btnCetak" target="_blank"><i class="fa fa-print"></i> Print Surat</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- <script>
    window.print();
</script> -->