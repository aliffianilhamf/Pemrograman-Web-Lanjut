<?php
require "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Menu</title>
</head>

<body>
    <div class="container">
        <h1>Pilihan Menu</h1>
        <form action="kuitansi.php" method="post">
            <table class="table">
                <tr>
                    <th colspan="3">Makanan</th>
                </tr>
                <tr>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>Qty</th>
                </tr>
                <?php foreach ($makanan as $nama => $harga) : ?>
                    <tr>
                        <td><?= strtoupper($nama); ?></td>
                        <td><?= $harga; ?></td>
                        <td><input type="text" name="<?= $nama ?>"></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th colspan="3">Minuman</th>
                </tr>
                <tr>
                    <th>Minuman</th>
                    <th>Harga</th>
                    <th>Qty</th>
                </tr>
                <?php foreach ($minuman as $nama => $harga) : ?>
                    <tr>
                        <td><?= strtoupper($nama); ?></td>
                        <td><?= $harga; ?></td>
                        <td><input type="text" name="<?= $nama ?>"></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>Customer</td>
                    <td><input type="text" name="pemesan"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="Hitung Total">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>