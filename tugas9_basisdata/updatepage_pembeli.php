<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Barang</title>
    <?php
	include 'koneksi.php';

	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM data_pembeli WHERE id_pembeli='$id'");
    $d = mysqli_fetch_array($database);
    
    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
       }    
	?>
</head>
<body>
	<div class="container">
    <a href="index.php">KEMBALI</a>
    <h2>EDIT DATA PEMBELI</h2>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_pembeli" value="<?php echo $d['id_pembeli']; ?>">
                <label>Nama Pembeli</label>
				<input type="text" name="nama_pembeli" value="<?php echo $d['nama_pembeli']; ?>">
            </div>
			<div class="input">
                <label>Tanggal Transaksi Pembelian</label>
                <input type="text" name="tgl_transaksi_pembelian" value="<?php echo $d['tgl_transaksi_pembelian']; ?>">
            </div>
            <div class="input">
                <label>id Barang</label>
                <select name="id_barang">
                    <option value="<?php echo $d['id_barang'];?>"><?php echo $d['id_barang'];?></option>
                </select>
            </div>
            <div class="input">
                <label>Jumlah Uang Pembeli</label>
                <input type="text" name="jumlah_transaksi" value="<?php echo $d['jumlah_transaksi']; ?>">
            </div>
            <div class="input">
                <label>Jumlah Kembalian</label>
                <input type="text" name="jumlah_uang_kembali" value="<?php echo $d['jumlah_uang_kembali']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit_pembeli" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>