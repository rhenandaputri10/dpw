<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");

    $kodeMatkul = $_POST['kodeMatkul'];
    $namaMatkul = $_POST['namaMatkul'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah SET namaMatkul = '$namaMatkul', sks = '$sks', jam = '$jam' WHERE kodeMatkul = '$kodeMatkul'";
    $result = mysqli_query($link, $query);

    if(!$result) {
      die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
  }

  header("location:view_matkul.php?msg=Data mata kuliah berhasil diperbarui!");
?>