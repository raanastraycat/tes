<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal = $_POST['tanggal'];
    $aktivitas = $_POST['aktivitas'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO tbl_agenda (tanggal, aktivitas, keterangan)
    VALUES ('$tanggal', '$aktivitas', '$keterangan')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: tampil.php");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>