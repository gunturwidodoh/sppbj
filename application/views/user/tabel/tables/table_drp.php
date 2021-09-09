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
                <div class="col-sm-2">
                    <a href="<?php echo site_url(); ?>/tabel/tambah_awal" type="submit" class="btn btn-primary btn-sm mb-2 btn-block">Tambah Project Baru</a>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')) : ?>
                <div style="color:green;"><?= $this->session->flashdata('message'); ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="row">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto">
                        <!-- navs -->
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <nav class="nav nav-pills">
                                    <a class="nav-item nav-link" href="<?= site_url() ?>/tabel/index" id="nav-home-tab">Awal</a>
                                    <a class="nav-link active" id="nav-profile-tab" href="#nav-profile">DRP & SPPBJ</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" href="<?= site_url() ?>/tabel/tabel_kontrak">Kontrak</a>
                                </nav>
                            </div>
                        </div>
                        <!-- Tabel DRP & SAPPBJ -->
                        <div class="table-responsive tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table id="table2" class="table table-striped table-bordered table-hover" role="grid" style="width: 100%" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row" style="white-space: nowrap">
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Nama Pengadaan</th>
                                        <th rowspan="2">No. DRP</th>
                                        <th rowspan="2">No. SPPBJ</th>
                                        <th rowspan="2">Tgl. Terbit SPPBJ</th>
                                        <th rowspan="2">Anggaran DRP</th>
                                        <th rowspan="2">Anggaran SPPBJ</th>
                                        <th rowspan="2">Jenis Anggaran</th>
                                        <th colspan="2">Status</th>
                                        <th rowspan="2">Terakhir Diupdate</th>
                                        <th rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($tabel as $tb) : ?>
                                        <tr>
                                            <td><?= $tb['code']; ?></td>
                                            <td><?= $tb['nama']; ?></td>
                                            <td><?= $tb['no_drp']; ?></td>
                                            <td><?= $tb['no_sppbj']; ?></td>
                                            <td><?= $tb['tanggal']; ?></td>
                                            <td>Rp.<?= $tb['anggaran_edrp']; ?></td>
                                            <td>Rp.<?= $tb['nilai_sppbj']; ?></td>
                                            <td><?= $tb['jenis_anggaran']; ?></td>
                                            <td><?= $tb['keterangan']; ?></td>
                                            <td class="text-center font-weight-bold"><span><?= $tb['status']; ?></span>%</td>
                                            <td><?= $tb['modified_date']; ?></td>
                                            <!-- <td><a href="" data-toggle="modal" data-target="#modalStatus">Lihat Status</a></td> -->
                                            <!-- Action -->
                                            <td>
                                                <a href="<?= site_url() ?>/tabel/edit_data/<?= $tb['id']; ?>" class="badge badge-success">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>

<div class="modal" id="modalStatus" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Status Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <p>Apakah anda yakin ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= site_url() ?>/tabel/delete/<?= $tb['id']; ?>" type="button" class="btn btn-secondary" data-dismiss="modal">Yakin</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript'>
    $('.status').click(function() {
        $.ajax({
            url: '<?= site_url() ?>/tabel/index' + $tb['id'],
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var ttd = $(this).data('ttd');
                var status = $(this).data('status');
                $('#ttd').val(ttd);
                $('#status').val(status);
            }
        });
    });
    // $(document).ready(function() {
    //     $(document).on('click', '#detail', function() {
    //         var ttd = $(this).data('ttd');
    //         var status = $(this).data('status');
    //         $('#ttd').val(ttd);
    //         $('#status').val(status);
    //     })
    // })
</script>