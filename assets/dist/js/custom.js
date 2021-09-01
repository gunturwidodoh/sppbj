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
    $('th').css('text-align', 'center');
    $('td').css('vertical-align', 'middle');
    
    // // setiap click cell pada table munculkan nilai pada status
    // $('tr td').click(function() {
    //     var value = $(this).text();
    //     $('tr td').not(this).parent().css('background', '')
    //     $(this).parent().css('background', 'linear-gradient(rgba(0, 100, 0, 0.15), rgba(0, 100, 0, 0.15))');
    //     $('#cardStatus p').html("<strong>" + value + "</strong>");
    // });
});