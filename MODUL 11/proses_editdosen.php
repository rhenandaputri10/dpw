<?php
  // mengecek apakah tombol edit telah diklik
  if (isset($_POST['edit'])) {
    // buat koneksi dengan database
    include("koneksi.php");

    // membuat variabel untuk menampung data dari form edit
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHPdosen = $_POST['noHPdosen'];

    //buat dan jalankan query UPDATE
    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHPdosen = '$noHPdosen' WHERE idDosen = '$id'";

    $result = mysqli_query($link, $query);

    //periksa hasil query apakah ada error
    if(!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  // melakukan redirect ke halaman viewdosen.php
  header("location:view_dosen.php?msg=Data dosen berhasil diperbarui!");
?>