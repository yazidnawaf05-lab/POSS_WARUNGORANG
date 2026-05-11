
<?php include './barang_action.php'
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    
      <form action="barang_action.php?aksi=insert" method="post">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="">
        <label for="harga_barang">Harga Barang</label>
        <input type="text" name="harga_barang" id="">
        <select name="id_kategori" id="showDataKategori">   <?php
        $data = showDataKategori($conn);
        $no = 1;

        while ($row = $data->fetch_assoc()){
          ?>
             <option value="<?= $row['id'] ?>" ><?= $row['nama_sepatu'] ?></option>
          <?php

        }
        
        ?></select>
        <input type="submit" value="masuk">
      </form>
      
    
        
</body>
</html>