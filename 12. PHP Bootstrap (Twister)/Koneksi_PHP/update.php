<?php
include 'koneksi.php';
  $id = $_POST['id'];
  $game_name = $_POST['game_name'];
  $shared_date = $_POST['shared_date'];
  $deskripsi = $_POST['deskripsi'];

  $query = mysqli_query($koneksi, "UPDATE game SET game_name='$game_name', shared_date='$shared_date', deskripsi='$deskripsi' WHERE id='$id'");  
  if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil diubahh</div>";
    header("refresh:1 ; url=../Master Project.php");
  } else {
    echo "<div class ='alert alert-danger' style='text-align:center;'> data gagal diubah</div>";
    header("refresh:1 ; url=../Master Project.php");
  }
?>
