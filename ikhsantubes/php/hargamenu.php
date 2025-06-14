<?php
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'tubes_pw2024_243040017');

// query ke tabel harga_menu
$result = mysqli_query($conn, "SELECT * FROM menu");

// ubah datanya ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// simpan ke variabel harga_menu
$menu = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Daftar Harga Menu</a>
        </div>
    </nav>

    <div class="container">


        <table class="table table-bordered table-striped">
            <thead class="table-warning">
                <tr>
                    <th>ID</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $hm): ?>
                    <tr>
                        <td><?= $hm['id']; ?></td>
                        <td><?= $hm['menu']; ?></td>
                        <td><?= $hm['harga']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $hm['id']; ?>" class="btn btn-sm btn-primary">Ubah</a>
                            <a href="functions.php?id=<?= $hm['id']; ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>