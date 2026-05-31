<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHPmhs = $_POST['noHPmhs'];

    $query = "UPDATE t_mahasiswa SET namaMhs = '$namaMhs', prodi = '$prodi', alamat = '$alamat', noHPmhs = '$noHPmhs' WHERE npm = '$npm'";
    $result = mysqli_query($link, $query);

    if(!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:view_mahasiswa.php?msg=Data mahasiswa berhasil diperbarui!");
?>