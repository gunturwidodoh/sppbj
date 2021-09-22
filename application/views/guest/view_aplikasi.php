<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul; ?></b></h1>
                </div>
            </div>

            <!-- Card Tabel -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Tabel -->
                        <table id="tableAplikasi" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Aplikasi</th>
                                    <th>Business Owner</th>
                                    <th>Domain Aplikasi</th>
                                    <th>IP Local</th>
                                    <th>IP Public</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Count nomor aplikasi -->
                                <?php $i = 1; ?>
                                <?php foreach ($tabel as $tb) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td style="max-width: 300px; white-space: normal;"><?= $tb['nama_aplikasi']; ?></td>
                                        <td class="text-center"><?= $tb['business_owner']; ?></td>
                                        <td class="text-center"><?= $tb['domain_aplikasi']; ?></td>
                                        <td class="text-center"><?= $tb['ip_local']; ?></td>
                                        <td class="text-center"><?= $tb['ip_public']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>