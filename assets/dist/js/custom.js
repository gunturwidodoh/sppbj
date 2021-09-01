$(document).ready(function() {
    // hide tabel & tombol DRP dan kontrak di awal
    $("#tableSPPBJ").hide();
    $("#tableKontrak").hide();
    $("#btnTambahSPPBJ").hide();
    $("#btnTambahKontrak").hide();
    
    // align tabel otomatis    
    $("th").css("text-align", "center");
    $("td").css("vertical-align", "middle");

    // click tab
    $("#navAwal").click(function() {
        // ganti tabel
        $("#tableAwal").show();
        $("#tableSPPBJ").hide();
        $("#tableKontrak").hide();
        // ganti class utk style
        $("#navAwal").addClass("active");
        $("#navSPPBJ").removeClass("active");
        $("#navKontrak").removeClass("active");
        // ganti tombol tambah data
        $("#btnTambahAwal").show();
        $("#btnTambahSPPBJ").hide();
        $("#btnTambahKontrak").hide();

    });
    $("#navSPPBJ").click(function() {
        // ganti tabel
        $("#tableAwal").hide();
        $("#tableSPPBJ").show();
        $("#tableKontrak").hide();
        // ganti class utk style
        $("#navAwal").removeClass("active");
        $("#navSPPBJ").addClass("active");
        $("#navKontrak").removeClass("active");
        // ganti tombol tambah data
        $("#btnTambahAwal").hide();
        $("#btnTambahSPPBJ").show();
        $("#btnTambahKontrak").hide();
    });
    $("#navKontrak").click(function() {
        // ganti tabel
        $("#tableAwal").hide();
        $("#tableSPPBJ").hide();
        $("#tableKontrak").show();
        // ganti class utk style
        $("#navAwal").removeClass("active");
        $("#navSPPBJ").removeClass("active");
        $("#navKontrak").addClass("active");
        // ganti tombol tambah data
        $("#btnTambahAwal").hide();
        $("#btnTambahSPPBJ").hide();
        $("#btnTambahKontrak").show();
    });
});