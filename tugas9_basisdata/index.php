<?php
include "koneksi.php";

//query menampilkan data
$databarang = "SELECT * FROM `data_barang` ORDER BY `data_barang`.`nama_barang` ASC";
$datapembeli = "SELECT * FROM `data_pembeli` ORDER BY `data_pembeli`.`nama_pembeli` ASC";
$datapembelianbarang = "SELECT * FROM `data_pembelian_barang` ";
$datadistributor = "SELECT * FROM `data_distributor` ORDER BY `data_distributor`.`nama_distributor` ASC ";
$detailbarang = "SELECT * FROM `detail_barang` ORDER BY `detail_barang`.`jenis_barang` ASC ";

$printa = mysqli_query($conn, $databarang);
$printb = mysqli_query($conn, $datapembeli);
$printc = mysqli_query($conn, $datadistributor);
$printd = mysqli_query($conn, $datapembelianbarang);
$printe = mysqli_query($conn, $detailbarang);

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
    <nav>
        <a href="#databarang" class="active">Data Barang</a>
        <a href="#datapembeli">Data Pembeli</a>
        <a href="#datadistributor">Data Distributor</a>
        <a href="#pembelianbarang">Data Pembelian Barang</a>
        <a href="#detailbarang">Detail Barang</a>
    </nav>
    <div id="databarang">
        <header>
            <h2>DATA BARANG</h2>
        </header>
        <div class="main">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>id_Detail Barang</th>
                    <th>id_Distributor</th>
                    <th class="mini">Harga Barang</th>
                    <th class="mini">Stok</th>
                    <th>Action</th>
                </tr>
                <?php while($a = mysqli_fetch_array($printa)): ?>
                <tr>
                    <td><?= $a['nama_barang'];?></td>
                    <td><?= $a['id_detail_barang'];?></td>
                    <td><?= $a['id_distributor'];?></td>
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
            <br><br><hr>
        </div>
    </div>
    <div id="datapembeli">
        <header>
            <h2>DATA PEMBELI</h2>
        </header>
        <div class="main">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Tanggal Pembelian</th>
                    <th>id_Barang</th>
                    <th class="mini">Jumlah Transaksi</th>
                    <th class="mini">Jumlah Uang Kembali</th>
                    <th>Action</th>
                </tr>
                <?php while($b = mysqli_fetch_array($printb)): ?>
                <tr>
                    <td><?= $b['nama_pembeli'];?></td>
                    <td><?= $b['tgl_transaksi_pembelian'];?></td>
                    <td><?= $b['id_barang'];?></td>
                    <td>Rp. <?= $b['jumlah_transaksi'];?></td>
                    <td>Rp. <?= $b['jumlah_uang_kembali'];?></td>
                    <td>
                        <a class="edit" href="updatepage_pembeli.php?id=<?php echo $b['id_pembeli']; ?>">EDIT</a> | 
                        <a class="delete" href="delete.php?id=<?php echo $b['id_pembeli']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <a class="button" href="inputpage_pembeli.php">Tambah Pembeli</a>
            <br><br><hr>
        </div>
    </div>
    <div id="datadistributor">
        <header>
            <h2>DATA DISTRIBUTOR</h2>
        </header>
        <div class="main">
            <table>
                <tr>
                    <th>id Distributor</th>
                    <th>Nama Distributor</th>
                    <th>Action</th>
                </tr>
                <?php while($c = mysqli_fetch_array($printc)): ?>
                <tr>
                    <td><?= $c['id_distributor'];?></td>
                    <td><?= $c['nama_distributor'];?></td>
                    <td>
                        <a class="edit" href="updatepage.php?id=<?php echo $a['id_barang']; ?>">EDIT</a> | 
                        <a class="delete" href="delete.php?id=<?php echo $a['id_barang']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <br><br><hr>
        </div>
    </div>
    <div id="datapembelianbarang">
        <header>
            <h2>DATA PEMBELIAN BARANG</h2>
        </header>
        <div class="main">
            <table>
                <tr>
                    <th>id Pembelian Barang</th>
                    <th>id Distributor</th>
                    <th>Tanggal Transaksi Pembelian</th>
                    <th class="mini">Total Transaksi</th>
                    <th>Action</th>
                </tr>
                <?php while($d = mysqli_fetch_array($printd)): ?>
                <tr>
                    <td><?= $d['id_pembelian_barang'];?></td>
                    <td><?= $d['id_distributor'];?></td>
                    <td><?= $d['tgl_transaksi_pembelian'];?></td>
                    <td>Rp. <?= $d['total_transaksi'];?></td>
                    <td>
                        <a class="edit" href="updatepage.php?id=<?php echo $a['id_barang']; ?>">EDIT</a> | 
                        <a class="delete" href="delete.php?id=<?php echo $a['id_barang']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <br><br><hr>
        </div>
    </div>
    <div id="detailbarang">
        <header>
            <h2>DETAIL BARANG</h2>
        </header>
        <div class="main">
            <table>
                <tr>
                    <th>id Detail Barang</th>
                    <th>Jenis Barang</th>
                    <th>Keterangan Barang</th>
                    <th>Action</th>
                </tr>
                <?php while($e = mysqli_fetch_array($printe)): ?>
                <tr>
                    <td><?= $e['id_detail_barang'];?></td>
                    <td><?= $e['jenis_barang'];?></td>
                    <td><?= $e['keterangan_barang'];?></td>
                    <td>
                        <a class="edit" href="updatepage.php?id=<?php echo $a['id_barang']; ?>">EDIT</a> | 
                        <a class="delete" href="delete.php?id=<?php echo $a['id_barang']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
            <br><br><br>
        </div>
    </div>
    </div>
</body>
</html>