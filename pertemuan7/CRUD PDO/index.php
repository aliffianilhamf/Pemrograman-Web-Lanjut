<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman List Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>List Barang Dagangan</h1>
        <a href="form_tambah.php" class="btn btn-primary btn-lg">Tambah Barang</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th colspan="2">Nama Barang</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php
                require "config/db_conn.php";
                $query = "SELECT * FROM barang where 1";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $no = 0;
                while ($row = $stmt->fetch()) :
                    $no++;
                ?>
                    <td><?= $no; ?></td>
                    <td><?= $row['jml']; ?> pcs</td>
                    <td><?= $row['nama']; ?></td>
                    <td style="text-align: right;">Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?= $row['keterangan']; ?></td>
                    <td> <img src="files/<?= $row['foto'] ?>" class="img-fluid rounded" style="max-width: 100px;" alt="nama barang"> </td>
                    <td>
                        <form action="config/aksi_barang.php" method="post" onsubmit="return confirm('Apakah yakin akan menghapus data?')">
                            <a href="form_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edt</a> ||

                            <input type="hidden" name="del" value="<?= $row['id'] ?>">
                            <input type="submit" name="aksi" value="Hps" class="btn btn-danger btn-sm">
                        </form>
                    </td>
            </tr>
        <?php endwhile; ?>
        </table>
    </div>
</body>

</html>