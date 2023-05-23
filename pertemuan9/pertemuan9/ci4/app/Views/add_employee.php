<?php helper('html') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Form</title>
    <?=link_tag('css/bootstrap.min.css')?>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <h3 class="alert alert-primary" role="alert">Data berikut berhasil ditambahkan.</h3>
        <ul>
            <li>Nama: <?= $postdata['name'] ?></li>
            <li>Nama Unit: <?= $postdata['department'] ?></li>
            <li>Gaji: <?= $postdata['salary'] ?></li>
        </ul>
        <a href="<?= base_url() ?>emps">Kembali ke daftar pegawai</a>
    </div>
</body>
</html>