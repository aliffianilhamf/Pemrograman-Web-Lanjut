<?php
require "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['aksi'] == 'Tambah Data') {
        echo "berhasil";
        insert_data();
    } else if (($_POST['aksi'] == 'Edit Data') && ($_POST['id'] > 0)) {
        echo "berhasil";
        update_data();
    } else if (($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)) {
        delete_data();
    }
    header("Location: ../index.php");
    exit;
} else {
    echo "Halaman ini tidak boleh di akses secara langsung";
    exit;
}


function insert_data()
{
    global $conn;
    $query = "INSERT INTO barang (nama,harga,jml,keterangan,foto)
                    VALUES(
                    :nama, :harga, :jml, :keterangan, :foto
                    )";
    $params = [
        ':nama' => $_POST['nama'],
        ':harga' => $_POST['harga'],
        ':jml' => $_POST['jml'],
        ':keterangan' => $_POST['keterangan'],
        ':foto' => $_FILES['foto']['name']
    ];

    try {
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "Kesalahan tambah : " . $e->getMessage();
    }
}


function update_data()
{
    global $conn;

    $query = "update barang set nama = :nama, harga = :harga, jml = :jml, keterangan = :keterangan";
    $params = [
        ':nama' => $_POST['nama'],
        ':harga' => $_POST['harga'],
        ':jml' => $_POST['jml'],
        ':keterangan' => $_POST['keterangan'],
        ':id' => $_POST['id']
    ];

    if (!empty($_FILES['foto']['name'])) {
        $query .= ', foto = :foto';
        $params[':foto'] = $_FILES['foto']['name'];
    }
    $query .= ' where id = :id';

    try {
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "Kesalahan edit: " . $e->getMessage();
        echo $query;
    }
}

function delete_data()
{
    global $conn;

    $query = "DELETE FROM barang WHERE id = ?";

    try {
        $stmt = $conn->prepare($query);
        $stmt->execute(array($_POST['del']));
        echo "berhasil dihapus";
    } catch (PDOException $e) {
        echo "Kesalahan Hapus: " . $e->getMessage();
        echo $query;
    }
}
