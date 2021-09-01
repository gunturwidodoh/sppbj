$(document).ready(function() {
    // hide tabel DRP dan kontrak di awal
    $('#tableDRP').hide();
    $('#tableKontrak').hide();

    // click tab ganti tabel
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

    // click tab activate style
    $('#navAwal').click(function() {
        $('#navAwal').addClass('active');
        $('#navDRP').removeClass('active');
        $('#navKontrak').removeClass('active');
    });
    $('#navDRP').click(function() {
        $('#navAwal').removeClass('active');
        $('#navDRP').addClass('active');
        $('#navKontrak').removeClass('active');
    });
    $('#navKontrak').click(function() {
        $('#navAwal').removeClass('active');
        $('#navDRP').removeClass('active');
        $('#navKontrak').addClass('active');
    });

    // align tabel otomatis
    $('table').css('white-space', 'nowrap');
    $('th').css('text-align', 'center');
    $('th').css('vertical-align', 'middle');
    $('td').css('vertical-align', 'middle');
});