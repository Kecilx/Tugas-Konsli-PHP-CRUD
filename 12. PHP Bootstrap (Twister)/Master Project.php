<?php
include 'Koneksi_PHP/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .sticky-sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }

        /* CSS untuk menghilangkan pesan otomatis */
        .fade-out {
            animation: fadeOut 2s forwards; /* durasi animasi 2 detik */
            animation-delay: 1s; /* jeda sebelum mulai menghilang */
        }

        /* Keyframes untuk animasi fade-out */
        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; display: none; }
        }
    </style>
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sticky-sidebar">
          <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-twitter-x fs-2"></i><span class="fw-bold fs-3 ms-3">Twister</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="Home.php" class="nav-link text-white">
                <i class="bi bi-houses me-2 fs-5"></i> Home
              </a>
            </li> 
            <li>
              <a href="Master Project.php" class="nav-link active bg-light text-dark">
                <i class="bi bi-folder me-2 fs-5"></i> Master Project
              </a>
            </li>
            <li>
              <a href="Master Service.php" class="nav-link text-white">
                <i class="bi bi-tools me-2 fs-5"></i> Master Service
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="Roblox Thumb/Profil1.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Nabil Ahmad F</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Switch Account</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-10" style="background-color: burlywood;">
            <div class="container-fluid">
                <div class="row p-3">
                    <h1 class="mt-2 text-center">Sharing Game</h1>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center" style="background-color:bisque">
                                <h3>List Game</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="gameTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Game</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM game");
                                            while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $data['game_name']; ?></td>
                                                <td><?php echo $data['shared_date']; ?></td>
                                                <td><?php echo $data['deskripsi']; ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject">
                                                        <i class="bi bi-info-circle"></i>
                                                    </button>
                                                    <a href="Koneksi_PHP/edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <!-- Modify delete button to use JavaScript -->
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $data['id']; ?>)">
                                                        <i class="bi bi-trash3"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- Detail Project Modal -->
                                <div class="modal fade" id="detailproject" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Info Game</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Sharing Game - Game Steam, dll</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="background-color:bisque">
                                <h3>Tambah Game</h3>
                            </div>
                            <div class="card-body">
                                <!-- Notification Area -->
                                <div id="notification" class="alert d-none"></div>

                                <form id="projectForm" method="POST">
                                    <label class="form-label" for="">Game Name</label>
                                    <input class="form-control" name="game_name" type="text" minlength="5" required>
                                    <label class="form-label" for="">Shared Date</label>
                                    <input class="form-control" name="shared_date" type="date" required>
                                    <label class="form-label" for="">Description</label>
                                    <textarea class="form-control" name="deskripsi"></textarea>
                                    <button type="button" id="saveButton" class="btn btn-success mt-2">Simpan</button>
                                    <input class="btn btn-danger mt-2" type="button" value="Cancel">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Save data and update table without refresh
            $('#saveButton').on('click', function() {
                $.ajax({
                    url: 'Koneksi_PHP/simpan.php',
                    type: 'POST',
                    data: $('#projectForm').serialize(),
                    success: function(response) {
                        $('#notification').removeClass('d-none alert-danger').addClass('alert-success').text('Data berhasil disimpan');
                        loadTable(); // Call function to refresh the table
                        $('#notification').addClass('fade-out'); // Apply fade-out class

                        // Remove the notification after 3 seconds
                        setTimeout(function() {
                            $('#notification').addClass('d-none').removeClass('alert-success fade-out');
                        }, 3000);
                    },
                    error: function() {
                        $('#notification').removeClass('d-none alert-success').addClass('alert-danger').text('Data gagal disimpan');
                    }
                });
            });

            // Load table data
            function loadTable() {
                $.ajax({
                    url: 'Koneksi_PHP/load_table.php',
                    type: 'GET',
                    success: function(data) {
                        $('#gameTable tbody').html(data);
                    }
                });
            }
        });

        // Function to handle double confirmation before deleting
        function confirmDelete(id) {
            // First confirmation
            var firstConfirm = confirm('Apakah Anda yakin ingin menghapus data ini?');
            if (firstConfirm) {
                // Second confirmation
                var secondConfirm = confirm('Apakah Anda benar-benar yakin?');
                if (secondConfirm) {
                    // Redirect to delete page with ID
                    window.location.href = 'Koneksi_PHP/delete.php?id=' + id;
                }
            }
        }
    </script>
</body>
</html>
