<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new Database();
    $con = $db->getConnection();

    $kodeMatkul = $_POST['kodeMatkul'];
    $namaMatkul = $_POST['namaMatkul'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $stmt = $con->prepare("UPDATE t_matakuliah SET namaMatkul = ?, sks = ?, jam = ? WHERE kodeMatkul = ?");
    $stmt->bind_param("siii", $namaMatkul, $sks, $jam, $kodeMatkul);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil diperbarui!");
?>