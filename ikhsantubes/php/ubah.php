<?php
require 'functions.php';

// Ambil ID dari URL
$id = $_GET["id"];

// Ambil data menu berdasarkan ID
$menu = query("SELECT * FROM menu WHERE id = $id")[0];

// Jika tombol submit ditekan
if (isset($_POST["submit"])) {
    if (ubahMenu($_POST) > 0) {
        header("Location: hargamenu.php");
        exit;
    } else {
        $gagal = "Data gagal diubah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Menu</title>
    <link rel="stylesheet" href="ubah.css">
    <link rel="stylesheet" href="tambah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="mb-4 text-center">Ubah Data Menu</h1>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $menu['id']; ?>">

                <div class="mb-3">
                    <label for="menu" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" id="menu" name="menu" required value="<?= $menu['menu']; ?>">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required value="<?= $menu['harga']; ?>">
                </div>

                <button type="submit" name="submit" class="btn btn-success">Ubah Data</button>

                <?php if (isset($gagal)): ?>
                    <div class="alert alert-danger mt-3"><?= $gagal; ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</body>

</html>