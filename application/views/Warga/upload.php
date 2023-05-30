<?php if (isset($error)) {
    echo "ERROR UPLOAD : <br/>";
    print_r($error);
    echo "<hr/>";
} ?>


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
                <h3 class="card-title">Upload Dokumen</h3>
            </div>
            <hr>

            <form method="post" enctype="multipart/form-data" action="<?= base_url('file/proses') ?>">
                <div class="input-group ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text form-control ml-2">Nama</span>
                        <input type="text" class="form-control col-md-9 ml-1" name="nama" id="nama" value="" placeholder="Silahkan isikan nama file" />
                    </div>
                    <div>
                        <td><input class="btn btn-link form-control " type="file" name="file" id="file" /></td>
                    </div>
                </div>
                <hr>
                <div class="col-md mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <!-- <button class="btn btn-primary ml-2 mb-2" type="submit" name="submit" id="submit"><i class="fa fa-save"> Simpan</i></button> -->
                    <a href="<?= site_url('file') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</section>