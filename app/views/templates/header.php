<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/5d8dfb0173.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/<?= $data['nama_file'] ?>.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="shortcut icon" href="img/logotok.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/5d8dfb0173.js" crossorigin="anonymous"></script>
    <title><?= $data['judul']?></title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <img src="img/logobeta.svg" alt="SIBETA Logo" />
            <div class="navbar-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>/homepage" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>/dashboard" class="nav-link">Pelajaran</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Peringkat</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Bantuan</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-tengah"></div>
        <div class="nav-kanan" id="navbar-kanan">
            <div class="nav-akun">
                <img src="img/nav-akun.png" alt="profile" />
                <div class="nav-akun-nama-level">
                    <span>Naufal Harits P</span>
                    <span>(Lv.100)</span>
                </div>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="dropdown">
                <a class="drop-back" id="drop-back"><i class="fa-solid fa-arrow-up" id="back-drop"></i></a>
                <a href="<?= BASEURL; ?>/dashboard">Dasbor</a>
                <a href="">Pengaturan Akun</a>
                <a href="<?= BASEURL; ?>">Log Out</a>
            </div>
        </div>
        <div class="header-sidebar">
            <i class="fa-solid fa-bars" id="sidebar-icon"></i>
        </div>
    </nav>
    <div class="sidebar-belum-muncul" for="sidebar-icon">
        <ul class="profil-sidebar">
            <li>
                <i class="fa-solid fa-bars" id="sembunyikan-sidebar"></i>
                <div>
                    <img src="img/nav-akun.png" alt="profile" />
                </div>
                <a href="#">naufalharisprasetia (Lv.196)</a>
            </li>
        </ul>
        <ul class="list-navbar">
            <li>
                <a href="<?= BASEURL; ?>/homepage">Home</a>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard">Pelajaran</a>
            </li>
            <li>
                <a href="">Peringkat</a>
            </li>
            <li>
                <a href="">Bantuan</a>
            </li>
        </ul>
        <ul class="log-out">
            <li>
                <a href="index.html">Log Out</a>
            </li>
        </ul>
    </div>