<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style1.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../css/img/Gambar7.png" alt="Logo" />
                </span>
                <div class="header-text">
                    <span class="name">Dashboard</span>
                    <span class="profession">KopiQ</span>
                </div>
            </div>
            <i class="bi bi-arrow-right-circle-fill toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bi bi-search icon"></i>
                    <input type="search" placeholder="Search..." />
                </li>

                <li class="nav-link">
                    <a href="../database/pemesanan.php">
                        <i class="bi bi-bag-fill"></i>
                        <span class="text nav-text">Pemesanan</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="../database/users.php">
                        <i class="bi bi-person-fill"></i>
                        <span class="text nav-text">Users</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="../database/hargamenu.php">
                        <i class="bi bi-list"></i>
                        <span class="text nav-text">Harga Menu</span>
                    </a>
                </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../php/halamanlogin.php">
                        <i class="bi bi-box-arrow-in-left"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <div class="toggle-container">
                    <label class="switch">
                        <input type="checkbox" id="modeToggle" />
                        <span class="slider round"></span>
                    </label>
                    <span class="mode-text">Light Mode</span>
                </div>
            </div>
        </div>

        </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard</div>

    </section>


    <script src="../javascript/script.js"></script>
</body>

</html>