<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container my-5">
        <h1 class="text-center mb-4 text-light">UPDATE DATA</h1>
        
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM game");
        while ($data = mysqli_fetch_array($query)) {
        ?>

        <form action="update.php" method="POST" class="row g-3 mb-4">
            <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>">
            
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="game_name" name="game_name" class="form-control" value="<?php echo $data['game_name']; ?>" required>
            </div>
            
            <div class="col-md-4">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" id="shared_date" name="shared_date" class="form-control" value="<?php echo $data['shared_date']; ?>" required>
            </div>
            
            <div class="col-md-4">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?php echo $data['deskripsi']; ?>" required>
            </div>
            
            <div class="col-12 text-end">
                <button type="submit" name="update" class="btn btn-warning">Update</button>
            </div>
        </form>
        
        <hr class="my-4">

        <?php } ?>
    </div>
</body>
</html>