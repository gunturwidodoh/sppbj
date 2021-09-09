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
        $('#table1').DataTable({
            "scrollX": true,
            "order": [
                [11, "desc"]
            ]
        })
        $('#table2').DataTable({
            "scrollX": true,
            "order": [
                [10, "desc"]
            ]
        })
        $('#table3').DataTable({
            "scrollX": true,
            "order": [
                [29, "desc"]
            ]
        })
        $('#table4').DataTable({
            "scrollX": true
        })
    })
</script>
</body>

</html>