<?php
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {
    $db = new Database();
    $con = $db->getConnection();

    $nama = $_POST["namaDosen"];
    $noHPdosen = $_POST["noHPdosen"];

    $stmt = $con->prepare("INSERT INTO t_dosen (namaDosen, noHPdpsen) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $noHPdosen);

    if (!$stmt->execute()) {
        die("Gagal menambah data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewdosen.php?msg=Data dosen berhasil ditambahkan!");
?>