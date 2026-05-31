<?php
  // buka koneksi dengan MySQL
  include("koneksi.php");

  // mengecek apakah tombol tambah sudah diklik
  if (isset($_POST["tambah"])) {

    // mengambil data dari form input
    $nama = $_POST["namaDosen"];
    $noHPdosen = $_POST["noHPdosen"];

    // jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO t_dosen (namaDosen, noHPdosen) VALUES ('$nama', '$noHPdosen')";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  // melakukan redirect ke halaman viewdosen.php
  header("location:view_dosen.php?msg=Data dosen berhasil ditambahkan!");
?>