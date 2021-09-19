<div class="content-wrapper">
    <section class="content-header py-3">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-3">
                <div class="col-auto">
                    <h1><b><?= $judul ?></b></h1>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>/tabel/edit_data/<?= $tabel['id']; ?>" type="submit" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                        <b class="ml-2">Edit Data</b>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>/tabel/index" type="submit" class="btn btn-secondary">
                        <i class="fas fa-home"></i>
                        <b class="ml-2">Kembali ke Tabel Data</b>
                    </a>
                </div>
            </div>

            <!-- Card Informasi Umum -->
            <div class="card">
                <h6 class="card-header"><b>Informasi Umum</b></h6>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-sm table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">ID</th>
                                        <td><?= $tabel['code']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25 table-info">Nama Pengadaan</th>
                                        <td class="table-info" style="white-space: normal;"><?= $tabel['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Kategori</th>
                                        <td><?= $tabel['kategori']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Tahun</th>
                                        <td><?= $tabel['tahun']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Deskripsi</th>
                                        <td><?= $tabel['deskripsi']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table table-sm table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Person In Charge</th>
                                        <td><?= $tabel['pic']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Target Selesai</th>
                                        <td><?= $tabel['target']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Program Utama</th>
                                        <td><?= $tabel['program']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left w-25" style="background-color: #F2F2F2;">Mata Anggaran</th>
                                        <td><?= $tabel['mata_anggaran']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card DRP & SPPBJ -->
            <div class="card">
                <h6 class="card-header"><b>DRP & SPPBJ</b></h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">No.DRP</th>
                                            <td><?= $tabel['no_drp']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Anggaran DRP</th>
                                            <td><?= $tabel['anggaran_edrp']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Jenis Anggaran</th>
                                            <td><?= $tabel['jenis_anggaran']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">No. SPPBJ</th>
                                            <td><?= $tabel['no_sppbj']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Nilai SPPBJ</th>
                                            <td><?= $tabel['nilai_sppbj']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Tanggal Terbit SPPBJ</th>
                                            <td><?= $tabel['tanggal']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Card Kontrak -->
            <div class="card">
                <h6 class="card-header"><b>Kontrak</b></h5>
                <div class="list-group list-group-flush">
                    <!-- List Group Item 1 -->
                    <div class="list-group-item py-4">
                        <h6 class="mb-3 text-muted"><i>INFORMASI KONTRAK</i></h6>
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">No. Kontrak</th>
                                            <td><?= $tabel['nomor_kontrak']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Nilai Kontrak (+PPN 10%)</th>
                                            <td><?= $tabel['nilai_kontrak']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">No. PO</th>
                                            <td><?= $tabel['nomor_po']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Tanggal Kontrak</th>
                                            <td><?= $tabel['tanggal_kontrak']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Jangka Waktu Pengerjaan</th>
                                            <td><?= $tabel['jangka_waktu']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Tanggal Berakhir Kontrak</th>
                                            <td><?= $tabel['tanggal_kontrak']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Jaminan Pelaksanaan</th>
                                            <td><?= $tabel['jaminan_pelaksanaan']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- List Group Item 2 -->
                    <div class="list-group-item py-4">
                        <h6 class="mb-3 text-muted"><i>INFORMASI REKANAN</i></h6>
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Nama Rekanan Pelaksanaan</th>
                                            <td><?= $tabel['rekanan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">NPWP Rekanan</th>
                                            <td><?= $tabel['npwp_rekanan']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Nama AM</th>
                                            <td><?= $tabel['nama_am']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Alamat Rekanan</th>
                                            <td style="white-space: normal;"><?= $tabel['alamat_rekanan']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- List Group Item 3 -->
                    <div class="list-group-item py-4">
                        <h6 class="mb-3 text-muted"><i>RENCANA NILAI PEMBAYARAN</i></h6>
                        <div class="row">
                            <div class="col-4">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Termin 1</th>
                                            <td><?= $tabel['termin_1']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Termin 4</th>
                                            <td><?= $tabel['termin_4']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Termin 2</th>
                                            <td><?= $tabel['termin_2']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Termin 5</th>
                                            <td><?= $tabel['termin_5']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Termin 3</th>
                                            <td><?= $tabel['termin_3']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Selisih Termin</th>
                                            <td><?= $tabel['selisih']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- List Group Item 4 -->
                    <div class="list-group-item py-4">
                        <h6 class="mb-3 text-muted"><i>REALISASI PEMBAYARAN</i></h6>
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Q1</th>
                                            <td><?= $tabel['q1']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Q2</th>
                                            <td><?= $tabel['q2']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Q3</th>
                                            <td><?= $tabel['q3']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Q4</th>
                                            <td><?= $tabel['q4']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-sm table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Opex (Biaya)</th>
                                            <td><?= $tabel['opex']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Capex (Investasi)</th>
                                            <td><?= $tabel['capex']; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left w-25" style="background-color: #F2F2F2;">Perbandingan Nilai Kontrak dan Pembayaran</th>
                                            <td><?= $tabel['perbandingan']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>