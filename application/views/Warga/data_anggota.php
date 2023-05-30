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
                    <i class="fa fa-users"></i> Anggota KK
                </h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <input type='hidden' class="form-control" id="id_kk" name="id_kk" value="" readonly />
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No KK | KPl Keluarga</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?= $row->no_kk ?>" readonly />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="kepala" name="kepala" value="<?= $row->kepala_kel ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $row->kelurahan_desa ?>, RT<?= $row->rt1 ?>/ RW<?= $row->rw1 ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Anggota</label>
                        <div class="col-sm-4">
                            <select name="id_warga" id="id_warga" class="form-control select2bs4" required>
                                <option selected="selected">- Warga -</option>

                                <option value="">
                                    nik
                                    -
                                    nama
                                </option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select name="hubungan" id="hubungan" class="form-control">
                                <option>- Hub Keluarga -</option>
                                <option>Kepala Keluarga</option>
                                <option>Istri</option>
                                <option>Anak</option>
                                <option>Orang Tua</option>
                                <option>Mertua</option>
                                <option>Menantu</option>
                                <option>Cucu</option>
                                <option>Famili Lain</option>
                            </select>
                        </div>
                        <input type="submit" name="Simpan" value="Tambah" class="btn btn-success">
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jekel</th>
                                        <th>Hub Keluarga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>DB</td>
                                        <td>DB</td>
                                        <td>DB</td>
                                        <td>DB</td>
                                        <td>
                                            <a href="?page=del-anggota&kode=14" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= site_url('kk') ?>" title="Kembali" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</section>