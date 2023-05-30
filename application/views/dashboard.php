    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="alert alert-warning" role="alert">
            <i class="fas fa-user-check"></i> Selamat Datang <span class="text-bold text-dark">"<?= $this->fungsi->user_login()->nama ?>"</span> Sebagai <span class="text-bold text-dark">"<?= $this->fungsi->user_login()->username ?>"</span>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_warga() ?></h3>
                        <p>Warga</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?= site_url('warga') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $this->fungsi->count_kk() ?></h3>
                        <p>Kartu Keluarga</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-card"></i>
                    </div>
                    <a href="<?= site_url('KK') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 ">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><?= $warga_lk ?></h3>
                        <p>Laki Laki</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-male"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $warga_pr ?></h3>
                        <p>Perempuan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-female"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->