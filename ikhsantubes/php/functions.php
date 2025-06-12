<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040017');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{

    $conn = koneksi();

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);


    $query = "INSERT INTO users (nama, email, password)
    VALUES
    ('$nama', '$email', '$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data("id");

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);

    $query = "UPDATE users SET 
                nama = '$nama',
                email = '$email',
                password = '$password',
                WHERE id = $id
                ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{

    $conn = koneksi();

    $nama = strtolower(stripslashes($data["nama"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $result = mysqli_query($conn, "SELECT nama FROM users WHERE nama = '$nama'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username Sudah Ada Yang Pakai');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$password', '$email')");;

    mysqli_affected_rows($conn);
}
