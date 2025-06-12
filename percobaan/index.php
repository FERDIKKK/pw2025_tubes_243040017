<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>halaman login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="inputbox">
                <input type="text" placeholder="Username" required>
                <i class="bi bi-person"></i>
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Password" required>
                <i class="bi bi-lock"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> remember me </label>
                <a href="#">lupa password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="link-masalah">
                <p>Tidak bisa login? <a href="#">Register</a></p>
            </div>

        </form>
    </div>



</body>

</html>