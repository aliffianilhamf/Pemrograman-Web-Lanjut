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
</body>

</html>