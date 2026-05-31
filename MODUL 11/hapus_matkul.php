<?php
  include("koneksi.php");

  if (isset($_GET["kodeMatkul"])) {
    $kodeMatkul = $_GET["kodeMatkul"];

    $query = "DELETE FROM t_matakuliah WHERE kodeMatkul='$kodeMatkul'";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:view_matkul.php?msg=Data mata kuliah berhasil dihapus!");
?>