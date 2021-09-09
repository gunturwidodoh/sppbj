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


<!-- Pagination -->
//pagination
//config
$config['base_url'] = 'http://localhost:8080/sppbj/index.php/tabel/index';
$config['total_rows'] = $this->Tabel_model->countAllData();
$config['per_page'] = 10;

//style
$config['full_tag_open'] = '<nav aria-label="Page navigation example">
    <ul class="pagination">';
        $config['full_tag_close'] = '</ul>
</nav>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link');

//inisialisasi
$this->pagination->initialize($config);

//get data
$data['start'] = $this->uri->segment(3);
$data['tabel'] = $this->Tabel_model->getData($config['per_page'], $data['start']);
if ($this->input->post('keyword')) {
$data['tabel'] = $this->Tabel_model->cariDataProject();
}