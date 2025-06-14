<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'tubes_pw2024_243040017');
}

function query($query)
{
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
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO users (nama, password, email)
              VALUES ('$nama', '$password', '$email')";

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

    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE users SET 
                nama = '$nama',
                password = '$password',
                email = '$email'
              WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();

    $nama = strtolower(stripslashes($data["nama"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $result = mysqli_query($conn, "SELECT nama FROM users WHERE nama = '$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah digunakan!');</script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO users (nama, password, email) 
                         VALUES ('$nama', '$password', '$email')");

    return mysqli_affected_rows($conn);
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = $data['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE nama = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['nama'];

            if ($user['nama'] === 'admin') {
                return ['success' => true, 'admin' => true];
            }

            return ['success' => true];
        } else {
            return ['error' => true, 'pesan' => 'Password salah!'];
        }
    } else {
        return ['error' => true, 'pesan' => 'Username tidak ditemukan!'];
    }
}

function cari($keyword)
{
    $conn = koneksi();
    $keyword = htmlspecialchars($keyword);
    $query = "SELECT * FROM menu WHERE nama LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk menghapus menu
function hapusMenu($id)
{
    $conn = koneksi();
    $id = (int) $id;
    $query = "DELETE FROM menu WHERE id = $id";
    return mysqli_query($conn, $query);
}


function ubahMenu($data)
{
    $conn = koneksi();

    $id = (int)$data['id']; // amankan ID
    $menu = htmlspecialchars($data['menu']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE menu SET 
                menu = '$menu',
                harga = '$harga'
              WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
