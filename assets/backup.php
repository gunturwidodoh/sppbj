<!-- TTD SPPBJ -->
<div class="form-group">
    <label for="inputTtd">SPPBJ Telah Ditandatangani Oleh</label>
    <select class="form-control" id="inputTtd" name="inputTtd">
        <?php foreach ($tandaTangan as $tt) : ?>
            <?php if ($tt == $row['ttd']) : ?>
                <option value="<?= $tt; ?>" selected><?= $tt; ?></option>
            <?php else : ?>
                <option value="<?= $tt; ?>"><?= $tt; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
</div>

<!-- jenis anggaran -->
<div class="form-group">
    <label for="inputJenisAnggaran">Jenis Anggaran</label>
    <select class="form-control" id="inputJenisAnggaran" name="inputJenisAnggaran">
        <?php foreach ($jenisAnggaran as $ja) : ?>
            <?php if ($ja == $row['jenis_anggaran']) : ?>
                <option value="<?= $ja; ?>" selected><?= $ja; ?></option>
            <?php else : ?>
                <option value="<?= $ja; ?>"><?= $ja; ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
</div>