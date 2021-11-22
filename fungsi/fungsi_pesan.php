<?php
if (!empty($_GET['pesan']) && $_GET['pesan'] == 'import') { //NOTIFIKASI IMPORT DATA
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
        Import Data berhasil
        <?php
        echo "<p>Jumlah data yang sukses di import : $_GET[sukses]<br>";
        echo "Jumlah data yang gagal di import : $_GET[gagal]</p>";
        ?>
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'tambah') { //NOTIFIKASI DATA BERHASIL DITAMBAH
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil disimpan
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'tambah_soal') { //NOTIFIKASI DATA SOAL BERHASIL DISIMPAN
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>&&id=<?php echo $_GET['id']; ?>">X</a>
        Data soal berhasil disimpan.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'ubah_nilai') { //NOTIFIKASI DATA BERHASIL NILAI
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET['modul']; ?>&&id=<?php echo $_GET['id']; ?>">X</a>
        Nilai berhasil disimpan.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'ubah') { //NOTIFIKASI DATA BERHASIL DIUBAH
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'hapus') { //NOTIFIKASI DATA BERHASIL DIHAPUS
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil dihapus
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'hapus_absensi') { //NOTIFIKASI DATA BERHASIL DIHAPUS
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=detail_absensi&&id=<?php echo $_GET["id"]; ?>">×</a>
        Data absensi berhasil dihapus.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'error') { //NOTIFIKASI DATA ERROR
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
        Data gagal disimpan.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'error_nilai') { //NOTIFIKASI DATA ERROR NILAI
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET['modul']; ?>&&id=<?php echo $_GET['id']; ?>">X</a>
        Data nilai gagal disimpan.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'file_error') { //NOTIFIKASI DATA ERROR
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=tambah_materi">X</a>
        File harus berupa format (*.png, *.gif, *.jpg, *.pdf, *.xlsx, *.xls, *.doc, *.docx, *.ppt, *.pptx, *.pdf, *.txt, *.flv, *.avi, *.mp4, *.swf).
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'aktif_kuis') { //NOTIFIKASI AKTIFKAN KUIS
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET["modul"]; ?>">X</a>
        Kuis telah diaktifkan.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'salah_pass') { //NOTIFIKASI SALAH UBAH PASSWORD LAMA
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET['modul']; ?>">X</a>
        Password lama tidak sesuai, silahkan masukkan kembali password lama anda dengan benar!.
    </div>
<?php
} else if (!empty($_GET['pesan']) && $_GET['pesan'] == 'foto_error') { //NOTIFIKASI DATA ERROR
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <a style="float: right;" href="index.php?modul=<?php echo $_GET['modul']; ?>">X</a>
        File harus berupa format (*.png, *.gif, *.jpg, *.bmp).
    </div>
<?php
}
