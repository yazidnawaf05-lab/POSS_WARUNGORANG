<?php

include '../connection.php';

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    if ($aksi == 'insert') {
        $nama_product = $_POST['nama_product'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
         $deskripsi = $_POST['deskripsi'];
         $image = $_FILES['image_product'];
        $id_category = $_POST['id_category'];
        insertProduct($conn, $nama_product, $harga, $id_category);
    if ($image) {
            $target_folder = "image_product/";
            $filename = basename($image['name']);
            $targetfileflder = $target_folder . $filename;
            if (move_uploaded_file($image['tmp_name'], $targetfileflder)) {
                echo "image berhasil diupload";
            } else {
                echo "image gagal diupload";
            }

            insertProduct($conn, $nama, $harga, $deskripsi, $filename, $stock, $category);
    }   else {
        insertProduct($conn, $nama, $harga, $deskripsi, '', $stock, $category);
    }
    } else if ($aksi == 'update') {
        $id = $_POST['id'];
        $nama_product = $_POST['nama_product'];
        $harga = $_POST['harga'];
        $id_category = $_POST['id_category'];
        updateProduct($conn, $nama_product, $harga, $id_category, $id);
    } else if ($aksi == 'delete') {
        $id = $_GET['id'];
        deleteProduct($conn, $id);
    }
}


function readProduct($conn)
{
    $query = 'select * from product';
    $result = $conn->execute_query($query);
    return $result;
}

function insertProduct($conn, $nama_product, $harga, $id_category)
{
    $query = "insert into product (nama_product, harga, id_category) values ('$nama_product', '$harga', '$id_category')";
    $result = $conn->execute_query($query);

    if ($result) {
        header("Location: index.php?pesan=berhasil_tambah");
    } else {
        echo "Data gagal diinsert";
    }
}
function showDataEditProduct($conn, $id)
{
    $query = "select * from product where id='$id'";
    $result = $conn->execute_query($query);
    return $result->fetch_assoc();
}

function updateProduct($conn, $nama_product, $harga, $id_category, $id)
{
    $query = "update product set nama_product ='$nama_product', harga='$harga', id_category='$id_category' where id='$id'";
    $result = $conn->execute_query($query);
    if ($result) {
        header("Location: index.php?pesan=berhasil_edit");
    } else {
        echo "Gagal update";
    }
}

function deleteProduct($conn, $id)
{
    $query = "delete from product where id='$id'";
    $result = $conn->execute_query($query);
    if ($result) {
        header("Location: index.php?pesan=berhasil_hapus");
    } else {
        echo "Gagal hapus";
    }
}