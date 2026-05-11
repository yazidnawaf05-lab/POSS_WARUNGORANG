 <?php 
  include './barang_action.php';
  include './barang_action.php';
$id = $_GET['id'];
$data = showDataEditBarang($conn, $id);
$row = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="barang_action.php?aksi=update" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>">

        <label for="harga_barang">Harga Barang</label>
        <inp  ut type="text" name="harga_barang" value="<?= $row['harga_barang'] ?>"> 

        <label for="id_kategori">Kategori</label>
        <select name="id_kategori">
            <?php
            $kategori = showDataKategori($conn);
            while ($kat = $kategori->fetch_assoc()) { ?>
                <option value="<?= $kat['id'] ?>" 
                    <?= $kat['id'] == $row['id_kategori'] ? 'selected' : '' ?>
                    <?= $kat['nama_sepatu'] ?>
            <?php } ?>

        <input type="submit" value="Ubah">
    </form>
</body>
</html>