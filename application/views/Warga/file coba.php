<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html><!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dokumen Warga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Dashboard"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dokumen Warga</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">File Dokumen</h3>
            </div>
            <div class="col-md mt-3 mb-3 ml-1">
                <a href="<?= base_url('file/create') ?>" class="btn btn-primary ">
                    <i class="fa fa-upload"></i> Upload Dokumen</a>
            </div>
            <section>
                <div class="row">
                    <div class="col-md-3 ml-2">
                        <form action="<?= base_url('file') ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari File Dokumen.." name="file" autocomplete="off" autofocus>
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.card-header -->
            <section>
                <div class="card-body p-0 ml-2 mr-2">
                    <!-- <h5>Result : <?= $total_rows; ?></h5> -->
                    <table class="table table-bordered table-striped">
                        <thead class="text-center ">
                            <tr class="bg-secondary">
                                <th style="width: 30px">No</th>
                                <th>Gambar</th>
                                <th>Keterangan File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <?php foreach ($file as $row) { ?>
                            <tbody class="text-center">
                                <tr>
                                    <td><?= ++$start; ?></td>
                                    <td><img width="100" src="<?= base_url(); ?>upload/<?= $row->nama_file; ?>"></td>
                                    <td><?= $row->nama; ?></td>
                                    <td>
                                        <a href="<?= site_url('file/download/' . $row->id_file); ?>" type="button" title="Download" class="btn btn-success btn-sm"><i class="fa fa-download"></i></a>
                                        <a href="<?= site_url('file/hapus/' . $row->id_file); ?>" onclick="return confirm('Apakah anda yakin ?')" type="button" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
            </section>
            <div class="card-footer">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</section>