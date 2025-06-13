<?php
session_start();
require '../php/functions.php'; // Fungsi login()

$conn = mysqli_connect("localhost", "root", "", "tubes_pw2024_243040017");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Login khusus admin
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "admin";
        header("Location: index1.php");
        exit;
    }

    // Login khusus opal
    if ($username === "opal" && $password === "opal123") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "opal";
        header("Location: halamanbeli.php");
        exit;
    }

    // Jika bukan admin atau opal, cek di database
    $login = login($_POST);

    if (isset($login['error'])) {
        $error = $login['pesan'];
    } else {
        header("Location: halamanbeli.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Login</h2>
            <?php if (isset($error)) : ?>
                <p style="color: red;"><?= $error; ?></p>
            <?php endif; ?>

            <form action="login.php" method="post">
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