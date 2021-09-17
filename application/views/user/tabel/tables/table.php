<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul; ?></b></h1>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>/tabel/form" type="submit" class="btn btn-primary">
                        <b>+ Tambah Baru</b>
                    </a>
                </div>
            </div>

            <!-- Card Tabel -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr role="row" style="white-space: nowrap">
                                    <th rowspan="2">ID</th>
                                    <th rowspan="2">Nama Pengadaan</th>
                                    <th rowspan="2">Kategori</th>
                                    <th rowspan="2">Tahun</th>
                                    <th rowspan="2">Deskripsi</th>
                                    <th rowspan="2">PIC</th>
                                    <th rowspan="2">Target Selesai</th>
                                    <th rowspan="2">Program Utama</th>
                                    <th rowspan="2">Mata Anggaran</th>
                                    <th colspan="2">Status</th>
                                    <th rowspan="2">Terakhir Diupdate</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>