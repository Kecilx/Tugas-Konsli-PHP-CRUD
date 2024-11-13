<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM game WHERE id='$id'");
$data = $sql->fetch_assoc();
$query = $koneksi->query("DELETE FROM game WHERE id='$id'");

if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil dihapus</div>";
    header("location:../Master Project.php");
} else {
    echo "<div class ='alert alert-danger' style='text-align:center;'> data gagal dihapus</div>";
    header("location:../Master Project.php");
}