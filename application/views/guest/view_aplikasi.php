<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">
                        <form action="" method="post">
                            <div class="input-group input-group-sm float-right mb-2" style="width: 150px;">
                                <input type="text" name="keyword" class="form-control float-right" placeholder="Cari data">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>
                        <table id="dataTable" class="table table-bordered table-striped dataTable" role="grid" style="width: 100%" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center" role="row" style="white-space: nowrap">
                                    <th>Nama Aplikasi</th>
                                    <th>Business Owner</th>
                                    <th>Domain Aplikasi</th>
                                    <th>IP Local</th>
                                    <th>IP Public</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td class="text-left"><?= $tb['nama_aplikasi']; ?></td>
                                        <td><?= $tb['business_owner']; ?></td>
                                        <td><?= $tb['domain_aplikasi']; ?></td>
                                        <td><?= $tb['ip_local']; ?></td>
                                        <td><?= $tb['ip_public']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?= $this->pagination->create_links(); ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>