<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "pw2024_243040017");

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);


if (isset($_POST['login'])) {
    $login = login($_POST);

    if (isset($login['error'])) {
        $error = $login['pesan'];
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Registrasi</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/register.css" />
</head>

<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Login</h2>
            <?php
            if (isset($login['error'])) : ?>
                <p style="color: red;"><?= $login['pesan'];   ?></p>

            <?php endif;    ?>

            <form action="functions.php" method="post">
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required />
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required />
                    <p>Tidak bisa login? <a href="../php/register.php">Register</a></p>
                </div>
                <button type="submit" name="login">Login</button>
            </form>


        </div>
    </div>
</body>

</html>