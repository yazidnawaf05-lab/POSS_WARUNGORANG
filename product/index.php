<?php

include '../koneksi.php';

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    // $id = $_GET['id'];

    if ($aksi == 'delete') {
    } else if ($aksi == 'edit') {
        $id = $_GET['id'];
        editProduct($id);
    } else if ($aksi == 'update') {
    } else if ($aksi == 'insert') {
        $id_category = $_POST['id_category'];
        $nama_category = $_POST['nama_product'];
        $harga = $_POST['harga'];
        insertProduct($conn, $id_category, $nama_category, $harga);
    }
}

function editProduct($id)
{
    header("Location: edit.php?id=$id");
}

function showDataEditProduct($id, $con)
{
    $query = 'select * from product where id=' . $id;
    $result = $con->execute_query($query);
    return $result->fetch_assoc();
}

function readProduct($con)
{
    $query = "Select product.id, product.nama as nama_product, product.harga ,
    category.nama as nama_category
    from product 
    join category 
    on product.id_category = category.id";
    $result = $con->execute_query($query);
    return $result;
}

function readCategory($con)
{
    $query = 'select * from category';
    $result = $con->execute_query($query);
    return $result;
}

function insertProduct($con, $id_category, $nama_category, $harga)
{
    $query = "insert into product (id_category, nama, harga) values ($id_category, '$nama_category', '$harga')";
    $result = $con->execute_query($query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal Insert Data";
    }
}