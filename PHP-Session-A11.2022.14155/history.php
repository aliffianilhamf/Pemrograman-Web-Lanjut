<?php
session_start();
if (!isset($_SESSION['history'])) {
    header("location: calculator.php");
    exit;
}

if (isset($_GET['del'])) {
    unset($_SESSION['history'][$_GET['del']]);
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

    <title>Riwayat Perhitungan</title>
    <style>
        .container {
            height: 750px;

        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="main">
            <div class="card bg-success text-light p-2 text-center" style="width: 20rem;">
                <h3 class="rounded p-1" style="background-color: #3F497F;">Riwayat Perhitungan</h3>

                <table class="text-center  ms-3">
                    <?php foreach ($_SESSION['history'] as $idx => $data) : ?>
                        <tr>
                            <td><?= $data[0]; ?> </td>
                            <td> <?= $data[2]; ?></td>
                            <td><?= $data[1]; ?> = </td>
                            <td><?= $data[3]; ?></td>
                            <td>
                                <a href=" history.php?del=<?= $idx ?>"> <button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a class="p-1" href="calculator.php"><button type="button" class="btn btn-primary">&laquo; Kembali ke kalkulator</button></a>
            </div>
        </div>
    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>