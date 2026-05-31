<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new Database();
    $con = $db->getConnection();

    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHPdosen = $_POST['noHPdosen'];

    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen = ?, noHPdosen = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHPdosen, $id);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewdosen.php?msg=Data dosen berhasil diperbarui!");
?>