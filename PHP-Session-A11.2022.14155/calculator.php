<?php
include "function.php";

$hasil = null;
$angka1 = null;
$angka2 = null;
$operator = '+';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = hitung($angka1, $angka2, $operator);
    add_session_hist($angka1, $angka2, $operator, $hasil);
    $_SESSION['history'] == true;
    //
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KalkulatorKu</title>

    <style>
        .container {
            height: 750px;

        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="main">
            <div class="card  text-light p-2 text-center" style="width: 20rem; background-color : #4E6E81">
                <h3 class=" rounded p-1" style="background-color : #F9DBBB; color : #2E3840">Kalkulator Keren Sekali</h3>
                <form class="" action="" method="post">
                    <input class="m-1 p-2 rounded-3 form-control" type="text" name="angka1" placeholder="angka1" style="width :100%;height:2.3rem;" value="<?= $angka1; ?>">
                    <input class="m-1 p-2 rounded-3 form-control" type="text" name="angka2" placeholder="angka2" style="width :100%;height:2.3rem;" value="<?= $angka2; ?>">
                    <select class="m-1 p-2 rounded-3 " name="operator" id="" style="width :70%; height:2.3rem;">
                        <option value="+" <?= ($operator == '+' ? "selected" : "") ?>>+</option>
                        <option value="-" <?= ($operator == '-' ? "selected" : "") ?>>-</option>
                        <option value="x" <?= ($operator == 'x' ? "selected" : "") ?>>x</option>
                        <option value="/" <?= ($operator == '/' ? "selected" : "") ?>>/</option>
                    </select>
                    <button type="submit" class="btn btn-primary" value="hitung">Hitung</button>
                    <input class="m-1 p-2 rounded-3" type="text" style="width :100%;height:2.3rem;" value="<?= $hasil ?>">
                    <a class="m-1 text-light" href="history.php"> Riwayat Perhitungan &raquo;</a>
                </form>
            </div>
        </div>
    </div>





























    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>