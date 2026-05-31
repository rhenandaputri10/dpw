<?php
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {
    $db = new Database();
    $con = $db->getConnection();

    $npm = $_POST["npm"];
    $namaMhs = $_POST["namaMhs"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $noHPmhs = $_POST["noHPmhs"];

    $stmt = $con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHPmhs) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHPmhs);

    if (!$stmt->execute()) {
        die("Gagal menambah data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil ditambahkan!");
?>