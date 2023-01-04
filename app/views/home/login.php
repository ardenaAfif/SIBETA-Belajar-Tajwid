<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login.css" />
    <title>Halaman Login</title>
</head>

<body>
    <div class="login">
        <img src="<?= BASEURL; ?>/img/logobeta.svg" class="logobeta" />
        <a href="">
            <h3>
                <span><i class="fa-brands fa-google"></i></span>Masuk Dengan Google
            </h3>
        </a>
        <hr color="#7fbcd2" />
        <h6>Or Login with Email</h6>

        <!-- <?php //foreach($data['users'] as $user ) : ?> -->
        <!-- <h1><?= $user['fullname']; ?></h1> -->
        <!-- <?php //endforeach; ?> -->


        <!-- FORM -->
        <div class=" container">
            <div class="title"></div>
            <form action="<?= BASEURL; ?>/home/cekUser" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <label class="details" for="email">Email</label>
                        <input type="email" placeholder="Isikan dengan emailmu" name="email" id="email" required />
                    </div>
                    <div class="input-box">
                        <label class="details" for="password">Password</label>
                        <input type="password" placeholder="Masukkan Password" name="password" id="password" required />
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Masuk" name="tombol-submit" id="tombol-submit" />
                </div>
                <h6 class="bawah-button">
                    Belum punya akun ? <span><a href="<?= BASEURL;?>/home/registrasi">Daftar</a></span>
                </h6>
            </form>
        </div>
        <!-- END FORM  -->

        <div class="kanan">
            <img src="<?= BASEURL; ?>/img/login_img.png" />
            <h1>من علّمني حرفا سرت له عبدا</h1>
        </div>
    </div>

</body>

</html>