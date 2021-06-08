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
	$database = mysqli_query($conn,"SELECT * FROM data_barang WHERE id_barang='$id'");
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
    <h2>EDIT DATA BARANG</h2>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                <label>Nama Barang</label>
				<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
            </div>
			<div class="input">
                <label>Kategori</label>
                <select name="jenis_barang">
                    <option <?php echo is_select ('Mainboard', $d['jenis_barang']);?> value="Mainboard">Mainboard</option>
                    <option <?php echo is_select ('Processor', $d['jenis_barang']);?> value="Processor">Processor</option>
                    <option <?php echo is_select ('Memory', $d['jenis_barang']);?> value="Memory">Memory</option>
                    <option <?php echo is_select ('Graphic Card', $d['jenis_barang']);?> value="Graphic Card">Graphic Card</option>
                    <option <?php echo is_select ('SSD', $d['jenis_barang']);?> value="SSD">SSD</option>
                    <option <?php echo is_select ('Power Supply', $d['jenis_barang']);?> value="Power Supply">Power Supply</option>
                </select>
            </div>
            <div class="input">
                <label>Detail Barang</label>
                <select name="keterangan_barang">
                    <option <?php echo is_select ('2x16GB 3200MHz', $d['keterangan_barang']);?> value="2x16GB 3200MHz">2x16GB 3200MHz</option>
                    <option <?php echo is_select ('2x16GB 3600MHz', $d['keterangan_barang']);?> value="2x16GB 3600MHz">2x16GB 3600MHz</option>
                    <option <?php echo is_select ('2x8GB 3200MHz', $d['keterangan_barang']);?> value="2x8GB 3200MHz">2x8GB 3200MHz</option>
                    <option <?php echo is_select ('550W 80+ GOLD', $d['keterangan_barang']);?> value="550W 80+ GOLD">550W 80+ GOLD</option>
                    <option <?php echo is_select ('750W 80+ GOLD', $d['keterangan_barang']);?> value="750W 80+ GOLD">750W 80+ GOLD</option>
                    <option <?php echo is_select ('850W 80+ GOLD', $d['keterangan_barang']);?> value="850W 80+ GOLD">SSD</option>
                    <option <?php echo is_select ('AMD AM4', $d['keterangan_barang']);?> value="AMD AM4">AMD AM4</option>
                    <option <?php echo is_select ('AMD B550', $d['keterangan_barang']);?> value="AMD B550">AMD B550</option>
                    <option <?php echo is_select ('AMD B550M', $d['keterangan_barang']);?> value="AMD B550M">AMD B550M</option>
                    <option <?php echo is_select ('AMD X570', $d['keterangan_barang']);?> value="AMD X570">AMD X570</option>
                    <option <?php echo is_select ('GDDR6 6GB', $d['keterangan_barang']);?> value="GDDR6 6GB">GDDR6 6GB</option>
                    <option <?php echo is_select ('GDDR6X 12GB', $d['keterangan_barang']);?> value="GDDR6X 12GB">GDDR6X 12GB</option>
                    <option <?php echo is_select ('INTEL B560', $d['keterangan_barang']);?> value="INTEL B560">INTEL B560</option>
                    <option <?php echo is_select ('INTEL B560M', $d['keterangan_barang']);?> value="INTEL B560M">INTEL B560M</option>
                    <option <?php echo is_select ('INTEL LGA1200', $d['keterangan_barang']);?> value="INTEL LGA1200">INTEL LGA1200</option>
                    <option <?php echo is_select ('INTEL Z590', $d['keterangan_barang']);?> value="INTEL Z590">INTEL Z590</option>
                    <option <?php echo is_select ('M2 NVMe 1TB', $d['keterangan_barang']);?> value="M2 NVMe 1TB">M2 NVMe 1TB</option>
                    <option <?php echo is_select ('M2 NVMe 512GB', $d['keterangan_barang']);?> value="M2 NVMe 512GB">M2 NVMe 512GB</option>
                    <option <?php echo is_select ('SATA 1TB', $d['keterangan_barang']);?> value="SATA 1TB">SATA 1TB</option>
                    <option <?php echo is_select ('SATA 512GB', $d['keterangan_barang']);?> value="SATA 512GB">SATA 512GB</option>
                </select>
            </div>
            <div class="input">
                <label>Harga Barang</label>
                <input type="text" name="harga_barang" value="<?php echo $d['harga_barang']; ?>">
            </div>
            <div class="input">
                <label>Stok</label>
                <input type="text" name="stok_barang" value="<?php echo $d['stok_barang']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>