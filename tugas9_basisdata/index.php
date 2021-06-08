<?php
include "koneksi.php";

//query menampilkan data
$databarang = "SELECT * FROM `data_barang` ORDER BY `data_barang`.`nama_barang` ASC";
$print = mysqli_query($conn, $databarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <h2>DATA BARANG</h2>      
        <div class="main">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Detail Barang</th>
                    <th class="mini">Harga Barang</th>
                    <th class="mini">Stok</th>
                    <th>Action</th>
                </tr>
                <?php while($a = mysqli_fetch_array($print)): ?>
                <tr>
                    <td><?= $a['nama_barang'];?></td>
                    <td><?= $a['jenis_barang'];?></td>
                    <td><?= $a['keterangan_barang'];?></td>
                    <td>Rp. <?= $a['harga_barang'];?></td>
                    <td><?= $a['stok_barang'];?></td>
                    <td>
                        <a class="edit" href="updatepage.php?id=<?php echo $a['id_barang']; ?>">EDIT</a> | 
                        <a class="delete" href="delete.php?id=<?php echo $a['id_barang']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <a class="button" href="inputpage.php">Tambah Barang</a>
        </div>
    </div>
</body>
</html>