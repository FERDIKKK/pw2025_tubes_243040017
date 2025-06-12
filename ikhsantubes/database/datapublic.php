<?php
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040017');
// query ke tabel data_public
$result = mysqli_query($conn, "SELECT * FROM data_public");
// ubah datanya ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$data_public = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Public</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Data Public</a>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_public as $dp): ?>
                    <tr>
                        <td><?= $dp['id']; ?></td>
                        <td><?= $dp['nama']; ?></td>
                        <td><?= $dp['email']; ?></td>
                        <td><?= $dp['tanggal']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $dp['id']; ?>" class="btn btn-sm btn-primary">Ubah</a>
                            <a href="delete.php?id=<?= $dp['id']; ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>