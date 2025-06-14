<!-- @format -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Style-->
    <link rel="stylesheet" href="../css/halamanlogin.css" />

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet" />

    <!--Feather icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--javascript-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-image: url(../css/img/kopiQ_background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero::after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 30%;
            bottom: 0;
            background: linear-gradient(0deg,
                    rgba(1, 1, 3, 1) 8%,
                    rgba(255, 255, 255, 0) 50%);
        }

        .hero .content {
            padding: 1.4rem 7%;
            max-width: 60rem;
        }

        .hero .content h1 {
            font-size: 5em;
            color: #bdbdbd;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .hero .content h1 span {
            color: var(--primary);
        }

        .hero .content p {
            font-size: 1.6rem;
            margin-top: 10px;
            line-height: 1.4;
            font-weight: 100;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            color: var(--bg);
            font-weight: 300;
        }

        .hero .content .cta {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.4rem;
            color: #fff;
            background-color: var(--primary);
            border-radius: 8px;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }
    </style>

    <title>Halaman Login utama</title>
</head>

<body>
    <!--navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">kopi<span>Q</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu Kami</a>
            <a href="../php/login.php">Login</a>
            <a href="../php/register.php">Sign up</a>
        </div>


    </nav>
    <!--navbar end-->

    <!--hero section start-->
    <section class="hero">
        <main class="content">
            <h1>Selamat datang di <span>KopiQ</span></h1>
            <p>
                <a href="../php/login.php" class="cta">Masuk</a>
            </p>
        </main>
    </section>
    <!--hero section end-->

    <!--about section start-->
    <section id="about" class="about">
        <h2>Tentang<span>Kami</span></h2>

        <div class="row">
            <div class="about-img">
                <img src="../css/img/kopiQ background.jpg" alt="Tentang kami" />
            </div>
            <div class="content">
                <h3>KopiQ</h3>
                <p>
                    KopiQ adalah jaringan kedai kopi asal Indonesia yang berkembang pesat sejak didirikan pada tahun 2025. Mengusung ko
                    nsep grab-and-go, KopiQ berhasil mengisi celah antara kedai kopi premium dan warung kopi tradisional, dengan menghadirkan minuman berkualitas tinggi
                    dengan harga yang terjangkau. Salah satu menu andalannya, Carammelmachiato, menjadi sangat populer karena rasanya yang khas dan mudah dikenali. Inovasi menu yang terus berkembang serta penggunaan bahan-bahan lokal berkualitas menjadikan Kopi Kenangan pilihan favorit masyarakat urban yang menginginkan kopi cepat saji tanpa mengorbankan rasa.
                </p>
                <p>
                    <span>
                        Tak hanya sukses di dalam negeri, KopiQ juga menunjukkan ambisinya untuk berekspansi ke pasar internasional. Melalui pemanfaatan teknologi, seperti aplikasi pemesanan online dan sistem pembayaran digital, KopiQ memperkuat posisinya sebagai brand kopi modern yang adaptif terhadap perkembangan zaman. Dengan kombinasi antara cita rasa khas Indonesia, pelayanan efisien, dan strategi bisnis yang matang, KopiQ telah menjelma menjadi simbol kebanggaan industri kuliner lokal yang mampu bersaing di tingkat global.


                    </span>
                </p>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--menu section-->
    <section id="menu" class="menu">
        <h2>Menu<span>Kami</span></h2>
        <div class="menu-container">
            <div class="menu-item">
                <img src="../css/img/Gambar4.png" alt="Es Kopi Susu">
                <h4>Caramel Gula Aren</h4>
                <p>Kopi dingin dengan susu segar dan gula aren.</p>
            </div>

            <div class="menu-item">
                <img src="../css/img/Gambar1.jpg" alt="Latte">
                <h4>Latte</h4>
                <p>Kopi dengan campuran cream dan susu.</p>
            </div>

            <div class="menu-item">
                <img src="../css/img/Gambar2.png" alt="Americano">
                <h4>Machalatte</h4>
                <p>Macha dengan di campur cream dan susu.</p>
            </div>
            <div class="menu-item">
                <img src="../css/img/Gambar5.png" alt="Americano">
                <h4>Black Aren</h4>
                <p>Kopi di campur dengan gula aren dan susu.</p>
            </div>
            <div class="menu-item">
                <img src="../css/img/Gambar6.png" alt="Americano">
                <h4>Caramel Maciato</h4>
                <p>campuran caramel, cream, susu, gula aren.</p>
            </div>
            <div class="menu-item">
                <img src="../css/img/Gambar7.png" alt="Americano">
                <h4>Caramel White</h4>
                <p>Caramel hanya di campur dengan susu.</p>
            </div>
        </div>



    </section>

    <!--menu section end-->



    <!--Footer-->
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/xavyy_7/"><i data-feather="instagram"></i></a>
            <a href="https://x.com/FERDIKKK7"><i data-feather="twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61563832805191"><i data-feather="facebook"></i></a>
        </div>
        <div class="link">
            <a href="../php/halamanlogin.php">Beranda</a>
            <a href="../php/login.php">Login</a>
            <a href="../php/register.php">Sign up</a>

        </div>

        <div class="ending">
            <p>
                Created by Ikhsan
                <a href="https://www.instagram.com/xavyy_7/">Ferdiansyah</a> | &copy;
                2025.
            </p>
        </div>
    </footer>

    <!--Footer end-->

    <!--Feather icons-->
    <script>
        feather.replace();
    </script>
    <!--My javascript-->
    <script src="js/script.js"></script>
</body>

</html>