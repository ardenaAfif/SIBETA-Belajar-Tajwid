<?php 


?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/registrasi.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign Up</title>
</head>

<body>

    <!-- KIRI -->
    <div class="kiri">
        <img src="<?= BASEURL; ?>/img/registrasi_img.png" alt="" />
        <h1>من علّمني حرفا سرت له عبدا</h1>
    </div>
    <!-- KANAN -->
    <div class="kanan">
        <img src="<?= BASEURL; ?>/img/logobeta.svg" />
        <a href="">
            <h3>
                <span><i class="fa-brands fa-google"></i></span>Sign Up With Google
            </h3>
        </a>
        <hr color="#7fbcd2" />
        <h6>atau daftar dengan</h6>

        <!-- FORM -->
        <div class="container">
            <div class="title"></div>
            <form action="<?= BASEURL; ?>/home/tambah" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <label class="details" for="fullname">Nama Lengkap</label>
                        <input type="text" placeholder="Isi Nama Lengkap" name="fullname" id="fullname" required />
                    </div>
                    <div class="input-box">
                        <label class="details" for="email">Email</label>
                        <input type="email" placeholder="Isikan dengan emailmu" name="email" id="email" required />
                    </div>
                    <div class="input-box">
                        <label class="details" for="password">Password</label>
                        <input type="password" placeholder="Masukkan Password" name="password" id="password" required />
                    </div>
                    <div class="input-box">
                        <label class="details" for="password2">Confirm Password</label>
                        <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2"
                            required />
                    </div>
                </div>
                <!--end of div.User Detail-->
                <!--end of CONTAINER-->
                <div class="button">
                    <input type="submit" value="Daftar" name="tombol-daftar" id="tombol-daftar" />
                </div>
                <div class="absolute-flash" style="
                font-style: italic;
                position: absolute;
                top: 890px;
                left: 165px;
                bottom: 0;
                color: red;
                right: 0;
                height: 45px;
                margin: 45px 0;
                ">
                    <?php Flasher::flash(); ?>
                </div>
                <h6 class="bawah-button">
                    Sudah punya akun ? <span><a href="login">Masuk</a></span>
                </h6>
            </form>
            <!-- END FORM  -->
        </div>
        <!---end of div kanan --->
    </div>

</body>

</html>