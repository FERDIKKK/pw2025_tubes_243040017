<?php
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040017');
// query ke tabel pesanan
$result = mysqli_query($conn, "SELECT * FROM pesanan");
// ubah datanya ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// simpan ke variabel stock_barang
$pesanan = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">pesanan</a>
        </div>
    </nav>

    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>tanggal</th>
                    <th>menu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pesanan as $psn): ?>
                    <tr>
                        <td><?= $psn['id']; ?></td>
                        <td><?= $psn['nama']; ?></td>
                        <td><?= $psn['tanggal']; ?></td>
                        <td><?= $psn['menu']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $sb['id']; ?>" class="btn btn-sm btn-primary">Ubah</a>
                            <a href="delete.php?id=<?= $sb['id']; ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional for responsive navbar) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>