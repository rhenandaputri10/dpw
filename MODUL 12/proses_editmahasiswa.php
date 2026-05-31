<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new Database();
    $con = $db->getConnection();

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHPmhs = $_POST['noHPmhs'];

    $stmt = $con->prepare("UPDATE t_mahasiswa SET namaMhs = ?, prodi = ?, alamat = ?, noHPmhs = ? WHERE npm = ?");
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHPmhs, $npm);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewmahasiswa.php?msg=Data mahasiswa berhasil diperbarui!");
?>