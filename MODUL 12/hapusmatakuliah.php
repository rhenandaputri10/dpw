<?php
  include("koneksi.php");

  if (isset($_GET["kodeMatkul"])) {
    $db = new Database();
    $con = $db->getConnection();
    
    $kodeMatkul = $_GET["kodeMatkul"];

    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMatkul = ?");
    $stmt->bind_param("i", $kodeMK);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }
  
  header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil dihapus!");
?>