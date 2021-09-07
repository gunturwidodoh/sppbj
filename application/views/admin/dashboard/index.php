<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <div class="col-sm-6">
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('message'); ?></div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
            </div>
            <div class="row mb-2">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $jumlah; ?></h3>

                            <p>Akun Terdaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= site_url() ?>/admin/register" class="small-box-footer">Daftar Akun Baru <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>