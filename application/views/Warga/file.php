<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <?php $this->view('alert') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><i class="nav-icon fas fa-folder"></i> File Dokumen</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="col-md mt-3 ml-2">
                        <a href="<?= base_url('file/create') ?>" class="btn btn-primary ">
                            <i class="fa fa-upload"></i> Upload Dokumen</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table" id="example1">
                            <thead class="bg-dark">
                                <tr class="text-center">
                                    <th style="width:5%;">No</th>
                                    <th>Gambar</th>
                                    <th>Keterangan File</th>
                                    <th style="width:15%;">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($file as $row) { ?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><img width="70" src="<?= base_url(); ?>upload/<?= $row->nama_file; ?>"></td>
                                        <td><?= $row->nama; ?></td>
                                        <td>
                                            <a href="<?= site_url('file/download/' . $row->id_file); ?>" type="button" title="Download" class="btn btn-success btn-sm"><i class="fa fa-download"></i></a>
                                            <a href="<?= site_url('file/hapus/' . $row->id_file) ?>" id="hapus" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            <!-- <a href="<?= site_url('file/hapus/' . $row->id_file); ?>" onclick="return confirm('Apakah anda yakin ?')" type="button" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->

<!-- <script>
    $("#table-file").DataTable({
        "processing": true,
        "serverside": true,
        "order": [],
        "ajax": {
            "url": "<?= site_url('file/get_json') ?>",
            "type": "POST"
        },
        "columns": [{
                "data": "no",
                width: 40
            },
            {
                "data": "gambar",
                width: 150
            },
            {
                "data": "keterangan file",
                width: 150
            },
            {
                "data": "aksi",
                width: 80
            },
        ],
        "columnDefs": [{
                "targets": [0, 5],
                "orderable": false
            },
            {
                "targets": [2, -1],
                "className": "text-center"
            }
        ]
    })
</script> -->