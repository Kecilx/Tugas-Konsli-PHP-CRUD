<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM game");
while ($data = mysqli_fetch_array($query)) {
    echo "<tr>
            <td>{$data['game_name']}</td>
            <td>{$data['shared_date']}</td>
            <td>{$data['deskripsi']}</td>
            <td>
                <button class='btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#detailproject'><i class='bi bi-info-circle'></i></button>
                <a href='Koneksi_PHP/edit.php?id={$data['id']}' class='btn btn-sm btn-success'><i class='bi bi-pencil-square'></i></a>
                <a href='Koneksi_PHP/delete.php?id={$data['id']}' class='btn btn-sm btn-danger'><i class='bi bi-trash3'></i></a>
            </td>
        </tr>";
}
?>
