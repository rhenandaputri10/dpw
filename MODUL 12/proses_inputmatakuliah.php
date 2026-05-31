<?php
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {
    $db = new Database();
    $con = $db->getConnection();

    $kodeMatkul = $_POST["kodeMatkul"];
    $namaMatkul = $_POST["namaMatkul"];
    $sks = $_POST["sks"];
    $jam = $_POST["jam"];

    $stmt = $con->prepare("INSERT INTO t_matakuliah (kodeMatkul, namaMatkul, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $kodeMatkul, $namaMatkul, $sks, $jam);

    if (!$stmt->execute()) {
        die("Gagal menambah data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil ditambahkan!");
?>