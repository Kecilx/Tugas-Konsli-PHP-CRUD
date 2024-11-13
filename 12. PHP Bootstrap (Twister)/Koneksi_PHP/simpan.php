<?php
include 'koneksi.php';

$game_name = $_POST['game_name'];
$shared_date = $_POST['shared_date'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "INSERT INTO game (game_name, shared_date, deskripsi) VALUES ('$game_name', '$shared_date', '$deskripsi')");

if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil disimpan</div>";
    header("refresh:1 ; url=../Master Project.php");
} else {
    header("refresh:1 ; url=../Master Project.php");
    echo "<div class = 'alert alert-success' style='text-align:center;'> data gagal disimpan</div>";
}

?>
