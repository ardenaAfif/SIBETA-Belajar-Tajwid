<!-- LESSON LIST -->
<?php foreach($data as $lesson):?>
<div class="lesson-list">
    <div class="lesson-list-content">
        <div class="gambar-lesson">
            <img src="<?= BASEURL; ?>/img/gambar-lesson.png" alt="">
        </div>
        <div class="content-lesson">
            <h2><?= $lesson['judul_materi']; ?></h2>
            <p><?= $lesson['deskripsi']; ?>
            </p>
            <div class="button-detail">Detail Pelajaran</div>
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- END OF LESSON LIST -->

</div>