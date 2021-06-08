<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php  
    include 'koneksi.php';
    ?>
</head>
<body>
    <div class="container">
        <a href="index.php">KEMBALI</a>
        <h2>Tambah Barang</h2>
        <hr>
        <div class="main">
        <form method="post" action="input.php" enctype="multipart/form-data">
            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" placeholder="Input barang disini">
            </div>
            <div class="input">
                <label>Kategori</label>
                <select name="jenis_barang">
                    <option value="Mainboard">Mainboard</option>
                    <option value="Processor">Processor</option>
                    <option value="Memory">Memory</option>
                    <option value="Graphic Card">Graphic Card</option>
                    <option value="SSD">SSD</option>
                    <option value="Power Supply">Power Supply</option>
                </select>
            </div>
            <div class="input">
                <label>Detail Barang</label>
                <select name="keterangan_barang">
                    <option value="2x16GB 3200MHz">2x16GB 3200MHz</option>
                    <option value="2x16GB 3600MHz">2x16GB 3600MHz</option>
                    <option value="2x8GB 3200MHz">2x8GB 3200MHz</option>
                    <option value="550W 80+ GOLD">550W 80+ GOLD</option>
                    <option value="750W 80+ GOLD">750W 80+ GOLD</option>
                    <option value="850W 80+ GOLD">850W 80+ GOLD</option>
                    <option value="AMD AM4">AMD AM4</option>
                    <option value="AMD B550">AMD B550</option>
                    <option value="AMD B550M">AMD B550M</option>
                    <option value="AMD X570">AMD X570</option>
                    <option value="GDDR6 6GB">GDDR6 6GB</option>
                    <option value="GDDR6X 12GB">GDDR6X 12GB</option>
                    <option value="INTEL B560">INTEL B560</option>
                    <option value="INTEL B560">INTEL B560</option>
                    <option value="INTEL LGA1200">INTEL LGA1200</option>
                    <option value="INTEL Z590">INTEL Z590</option>
                    <option value="M2 NVMe 1TB">M2 NVMe 1TB</option>
                    <option value="M2 NVMe 512GB">M2 NVMe 512GB</option>
                    <option value="SATA 1TB">SATA 1TB</option>
                    <option value="SATA 512GB">SATA 512GB</option>
                </select>
            </div>
            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_barang" placeholder="Input harga barang disini">
            </div>
            <div class="input">
                <label>Jumlah Stok</label>
                <input type="text" name="stok_barang" placeholder="Input stok barang disini">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Tambah">
            </div>
        </form>
        </div>
    </div>
</body>
</html>