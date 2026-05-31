<?php
  include("koneksi.php");

  if (isset($_POST["tambah"])) {
    $kodeMatkul = $_POST["kodeMatkul"];
    $namaMatkul = $_POST["namaMatkul"];
    $sks = $_POST["sks"];
    $jam = $_POST["jam"];

    $query = "INSERT INTO t_matakuliah (kodeMatkul, namaMatkul, sks, jam) VALUES ('$kodeMatkul', '$namaMatkul', '$sks', '$jam')";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menambah data: ".mysqli_errno($link).
      " - ".mysqli_error($link));
    }
  }

  header("location:view_matkul.php?msg=Data mata kuliah berhasil ditambahkan!");
?>