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
            <div class="row mb-2">
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('message'); ?></div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">
                        <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th class="sortting_asc" rowspan="1" colspan="1">Username</th>
                                    <th class="sortting_asc" rowspan="1" colspan="1">Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $tb['username']; ?></td>
                                        <!-- Action -->
                                        <td>
                                            <a href="<?= site_url() ?>/admin/delete/<?= $tb['id']; ?>">delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.container-fluid -->
    </section>
</div>