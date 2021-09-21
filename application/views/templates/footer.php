<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins'); ?>/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist'); ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist'); ?>/js/demo.js"></script>
<!-- Custom Javascript -->
<script src="<?php echo base_url('assets/dist'); ?>/js/custom.js"></script>
<!-- Data Tables -->
<script src="<?php echo base_url('assets/plugins'); ?>/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('assets/plugins'); ?>/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function() {
        $('#tableIndex').DataTable({
            "order": [
                [4, "desc"]
            ],
            "columns": [{
                    "searchable": false
                },
                null,
                {
                    "searchable": false
                },
                {
                    "searchable": false
                },
                {
                    "searchable": false
                },
                {
                    "searchable": false
                },
                {
                    "searchable": false
                }
            ],
            "language": {
                "searchPlaceholder": "ketik di sini untuk mencari",
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman.",
                "zeroRecords": "Tidak ada data.",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data",
                "infoFiltered": "(hasil pencarian dari _MAX_ data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
            }
        });
        $('#tableRequest').DataTable({
            "order": [
                [2, "desc"]
            ],
            "language": {
                "searchPlaceholder": "ketik di sini untuk mencari",
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman.",
                "zeroRecords": "Tidak ada data.",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data",
                "infoFiltered": "(hasil pencarian dari _MAX_ data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
            }
        });
    });
</script>
</body>

</html>