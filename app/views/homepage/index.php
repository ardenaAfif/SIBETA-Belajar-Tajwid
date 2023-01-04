<div class="main">
    <!-- Jumbotron Start -->
    <div class="pelajaran-utama">
        <div class="tulisan-pelajaran">
            <div class="tulisan-pelajaran-judul">
                <img src="<?= BASEURL; ?>/img/logo_pelajaran_homepage.png" alt="logosibeta" />
                <span>Pelajaran</span>
            </div>
            <a class="tulisan-pelajaran-contain" href="<?= BASEURL; ?>/dashboard">
                <div class="tulisan-pelajaran-contain-kiri">
                    <h1>Pembelajaran Ilmu Tajwid</h1>
                    <h3>
                        Dipelajaran ini, anda mempelajari seluruh ilmu pengetahuan untuk
                        membaca Al-qur’an dengan baik dan benar Dengan belajar tajwid,
                        anda akan belajar cara dan kaidah-kaidah membaca Al-qur’an yang
                        baik dan benar
                    </h3>
                    <div class="tulisan-pelajaran-contain-kiri-kotak">
                        <div class="tulisan-pelajaran-contain-kiri-kotak-jumlah">
                            <div class="tulisan-pelajaran-contain-kiri-kotak-jumlah-kotak">
                                <img src="<?= BASEURL; ?>/img/tulisan-pelajaran-contain-kiri-kotak-jumlah-kotak.png"
                                    alt="" />
                                <h2>3+ PELAJARAN</h2>
                            </div>
                        </div>
                        <div class="tulisan-pelajaran-contain-kiri-kotak-daftar">
                            <span>
                                <h2>NUN SUKUN DAN TANWIN</h2>
                            </span>
                            <span>
                                <h2>MAD</h2>
                            </span>
                            <span>
                                <h2>MAKHARIJUL-HURUF</h2>
                            </span>
                            <span>
                                <h2>DLL</h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="tulisan-pelajaran-contain-kanan">
                    <img src="<?= BASEURL; ?>/img/tulisan-pelajaran-contain-kanan.png" alt="" />
                </div>
            </a>
        </div>
    </div>
    <!-- Jumbotron End -->

    <!-- Daftar Pelajaran Start -->
    <div class="daftar-pelajaran">
        <div class="daftar-atas">
            <div class="judul-daftar">
                <img src="<?= BASEURL; ?>/img/tulisan-pelajaran-contain-kiri-kotak-jumlah-kotak.png" alt="logobuku" />
                <span>Daftar Pelajaran</span>
            </div>
            <?php foreach($data as $lesson):?>
            <div class="kotak-daftar">
                <div class="kotak-daftar-contain">
                    <a href="<?= BASEURL; ?>/lesson/<?= $lesson['lesson_id'] ?>" class="kotak-daftar-contain-kotak">
                        <div class="kotak-daftar-contain-kotak-items">
                            <h1><?= $lesson['judul'] ?></h1>
                            <div class="kotak-daftar-contain-kotak-items-gambar">
                                <img src="<?= BASEURL; ?>/img/kotak-daftar-contain-kotak-items-gambar.png"
                                    alt="logodaftarpelajaran" />
                            </div>
                            <div class="kotak-daftar-contain-kotak-items-jumlah">
                                <img src="<?= BASEURL; ?>/img/kotak-daftar-contain-kotak-items-jumlah.png"
                                    alt="logobuku" />
                                <span><?= $lesson['jumlah'] ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>



        </div>
        <div class="daftar-bawah">
            <h3>
                Untuk detail selengkapnya tentang semua pelajaran dan statusnya,
                klik <a href="">di sini</a>
            </h3>
        </div>
    </div>
</div>
<!-- Daftar Pelajaran End -->