<?php
  include("koneksi.php");

  if (isset($_POST["tambah"])) {
    $npm = $_POST["npm"];
    $namaMhs = $_POST["namaMhs"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $noHPmhs = $_POST["noHPmhs"];

    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHPmhs) VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHPmhs')";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  header("location:view_mahasiswa.php?msg=Data mahasiswa berhasil ditambahkan!");
?>