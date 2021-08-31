$(document).ready(function() {
    $('#navAwal').click(function() {
        $('#tableAwal').show();
        $('#tableDRP').hide();
        $('#tableKontrak').hide();
    });
    $('#navDRP').click(function() {
        $('#tableAwal').hide();
        $('#tableDRP').show();
        $('#tableKontrak').hide();
    });
    $('#navKontrak').click(function() {
        $('#tableAwal').hide();
        $('#tableDRP').hide();
        $('#tableKontrak').show();
    });
});