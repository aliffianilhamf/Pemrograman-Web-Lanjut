<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
} else {
    $nama = "Anonim";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bidang</title>
</head>

<body>
    <h3>Anda masuk sebagai <?= $nama; ?></h3>

    <form action="" method="post">
        <?php
        if (!isset($_GET['bidang'])) {
        } else if ($_GET['bidang'] == 'persegi') {
            $luas = 0;
            $panjang = 0;
            $lebar = 0;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $luas = $panjang * $lebar;
            }
            include "lib/persegi.php";
        } else if ($_GET['bidang'] == 'segitiga') {
            $luas = 0;
            $alas = 0;
            $tinggi = 0;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];
                $luas = 1 / 2 * $alas * $tinggi;
            }
            include "lib/segitiga.php";
        } else if ($_GET['bidang'] == 'lingkaran') {
            $luas = 0;
            $r = 0;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $r = $_POST['jari-jari'];
                $luas = 3.14 * $r * $r;
            }
            include "lib/lingkaran.php";
        }
        ?>

    </form>

    <div id="menu">
        <div>PILIH MENU PERHITUNGAN BERIKUT</div>
        <ul>
            <?php
            $bidang = ['persegi', 'segitiga', 'lingkaran'];
            $query = $_GET;
            $url = explode("?", $_SERVER['REQUEST_URI'])[0];
            foreach ($bidang as $bdg) {
                $query['bidang'] = $bdg;
                $url_query = $url . "?" . http_build_query($query);
                echo '<li><a href ="' . $url_query . '">' . ucfirst($bdg) . '</li>';
            }
            ?>
        </ul>
    </div>
</body>

</html>