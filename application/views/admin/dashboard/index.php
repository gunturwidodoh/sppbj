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
        </div>
    </section>
</div>