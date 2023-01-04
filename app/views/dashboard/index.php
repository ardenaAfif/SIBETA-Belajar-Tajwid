<!-- BODY -->
<div class="dashboard-container">
    <div class="flasher" style="
    position:absolute;
    top: 2px;
    left: 26px;
    ">
        <?php Flasher::flash(); ?>
    </div>

    <!-- body kiri  -->
    <div class="left-container">
        <!-- / 1.profile / -->
        <div class="row-user-profile">
            <div class="profil-detail">
                <div class="profil-detail-img">
                    <img src="<?= BASEURL; ?>/img/profil-detail.png" alt="" />
                </div>
                <div class="profil-detail-text">
                    <div>Naufal Harits Prasetia</div>
                    <div>Lv.196</div>
                </div>
            </div>
            <div class="lesson-done">
                <div class="lesson-done-count">
                    <img src="<?= BASEURL; ?>/img/lesson-done-count.png" alt="" />
                    38
                </div>
                <div class="lesson-done-text">Pelajaran Yang Sudah Selesai</div>
            </div>
            <div class="training-done">
                <div class="training-done-count">
                    <img src="<?= BASEURL; ?>/img/training-done-count.png" alt="" />
                    500
                </div>
                <div class="training-done-text">Latihan Diselesaikan</div>
            </div>
        </div>
        <!-- / next lesson / -->
        <div class="next-lesson">
            <div class="heading-next-lesson">
                <div class="heading-content">
                    <img src="<?= BASEURL; ?>/img/heading-content.png" alt="" />
                    <h2>Lanjutkan Pembelajaran</h2>
                </div>
            </div>
            <div class="progress-lesson-card">
                <div class="next-item-icon">
                    <img src="<?= BASEURL; ?>/img/next-item-icon.png" alt="" />
                </div>
                <div class="next-lesson-title-box">
                    <div class="next-lesson-title">
                        Berikutnya - QALQALAH
                        <div class="next-lesson-title-page">Qalqalah Sughra</div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-bar-shape">
                            <div class="progress-bar-shape-reached"></div>
                        </div>
                        4 / 17 Halaman
                    </div>
                </div>
                <a href="#" class="button-lanjutkan">Lanjutkan</a>
            </div>
        </div>

        <!-- / yang sedang berlangsung lesson / -->
        <div class="next-lesson">
            <div class="heading-next-lesson">
                <div class="heading-content">
                    <img src="<?= BASEURL; ?>/img/heading-content.png" alt="" />
                    <h2>Pembelajaran yang sedang berlangsung</h2>
                </div>
            </div>
            <div class="berlangsung-lesson-card">
                <div class="ongoing-item-icon">
                    <img src="<?= BASEURL; ?>/img/ongoing-item-icon.png" alt="" />
                </div>
                <div class="ongoing-lesson-title-box">
                    <div class="ongoing-lesson-title">Studi Waqf</div>
                    <div class="berlangsung-bar">
                        <div class="berlangsung-bar-shape">
                            <div class="berlangsung-bar-shape-reached"></div>
                        </div>
                        4 / 17 Halaman
                    </div>
                </div>
                <a href="#" class="button-lanjutkan">Lanjutkan</a>
            </div>
        </div>
        <!-- / Lesson Which Completed / Sudah selesai / -->
        <div class="next-lesson">
            <div class="heading-next-lesson">
                <div class="heading-content">
                    <img src="<?= BASEURL; ?>/img/heading-content.png" alt="" />
                    <h2>Pembelajaran yang sudah Selesai</h2>
                </div>
            </div>
        </div>
        <div class="dashboard-completed-lessons">
            <!-- card lesson -->
            <div class="completed-lesson-card-wrapper">
                <div class="completed-lesson-card qalqalah-bg">
                    <div class="logo-penanda-completed">
                        <img src="<?= BASEURL; ?>/img/logo-penanda-completed.png" alt="" />
                    </div>
                    <div class="judul-lesson-which-completed">
                        <h3>Study</h3>
                        <h3>Qolqolah</h3>
                    </div>
                    <div class="icon-lesson-which-completed">
                        <img src="<?= BASEURL; ?>/img/icon-lesson-which-completed.png" alt="" />
                    </div>
                    <a href="">
                        <div class="button-tinjau-ulang qalqalah-color">
                            Tinjau Ulang
                        </div>
                    </a>
                </div>
            </div>
            <!-- card lesson -->
            <div class="completed-lesson-card-wrapper">
                <div class="completed-lesson-card qalqalah-bg">
                    <div class="logo-penanda-completed">
                        <img src="<?= BASEURL; ?>/img/logo-penanda-completed.png" alt="" />
                    </div>
                    <div class="judul-lesson-which-completed">
                        <h3>Study</h3>
                        <h3>LAAM TA’RIEF</h3>
                    </div>
                    <div class="icon-lesson-which-completed">
                        <img src="<?= BASEURL; ?>/img/icon-lesson-which-completed.png" alt="" />
                    </div>
                    <a href="">
                        <div class="button-tinjau-ulang qalqalah-color">
                            Tinjau Ulang
                        </div>
                    </a>
                </div>
            </div>
            <!-- card lesson -->
            <div class="completed-lesson-card-wrapper">
                <div class="completed-lesson-card qalqalah-bg">
                    <div class="logo-penanda-completed">
                        <img src="<?= BASEURL; ?>/img/logo-penanda-completed.png" alt="" />
                    </div>
                    <div class="judul-lesson-which-completed">
                        <h3>Study</h3>
                        <h3>IDGHAM</h3>
                    </div>
                    <div class="icon-lesson-which-completed">
                        <img src="<?= BASEURL; ?>/img/icon-lesson-which-completed.png" alt="" />
                    </div>
                    <a href="">
                        <div class="button-tinjau-ulang qalqalah-color">
                            Tinjau Ulang
                        </div>
                    </a>
                </div>
            </div>
            <!-- card lesson -->
            <div class="completed-lesson-card-wrapper">
                <div class="completed-lesson-card qalqalah-bg">
                    <div class="logo-penanda-completed">
                        <img src="<?= BASEURL; ?>/img/logo-penanda-completed.png" alt="" />
                    </div>
                    <div class="judul-lesson-which-completed">
                        <h3>Study</h3>
                        <h3>MIM SUKUN DAN TANWIN</h3>
                    </div>
                    <div class="icon-lesson-which-completed">
                        <img src="<?= BASEURL; ?>/img/icon-lesson-which-completed.png" alt="" />
                    </div>
                    <a href="">
                        <div class="button-tinjau-ulang qalqalah-color">
                            Tinjau Ulang
                        </div>
                    </a>
                </div>
            </div>

            <!-- card lesson -->
            <div class="completed-lesson-card-wrapper">
                <div class="completed-lesson-card qalqalah-bg">
                    <div class="logo-penanda-completed">
                        <img src="<?= BASEURL; ?>/img/logo-penanda-completed.png" alt="" />
                    </div>
                    <div class="judul-lesson-which-completed">
                        <h3>Study</h3>
                        <h3>NUN SUKUN DAN TANWIN</h3>
                    </div>
                    <div class="icon-lesson-which-completed">
                        <img src="<?= BASEURL; ?>/img/icon-lesson-which-completed.png" alt="" />
                    </div>
                    <a href="">
                        <div class="button-tinjau-ulang qalqalah-color">
                            Tinjau Ulang
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- body kanan -->
    <div class="right-container">
        <img src="<?= BASEURL; ?>/img/right-container.png" alt="" />
    </div>
</div>