<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="width:740px;">
        <h1>Tambah Barang</h1>
        <hr>
        <form action="config/aksi_barang.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-md-2">Nama Barang</label>
                <div class="col-md-10"><input type="text" name="nama" id="nama" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="harga" class="col-md-2">Harga</label>
                <div class="col-md-10"><input type="text" name="harga" id="harga" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="jml" class="col-md-2">Jml. Stock</label>
                <div class="col-md-10"><input type="text" name="jml" id="jml" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <label for="keterangan" class="col-md-2">Keterangan</label>
                <div class="col-md-10"> <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"></textarea> </div>
            </div>

            <div class="row mb-3 ">
                <label for="foto" class="col-md-2">Foto</label>
                <div class="col-md-10"><input type="file" name="foto" id="foto" class="form-control"></div>
            </div>

            <div class="mb-3 row">
                <div class="offset-2 col-md-10">
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                    <input type="submit" name="aksi" value="Tambah Data" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>

</html>