<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $id = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['jenis_barang'];
    $harga_barang = $_POST['harga_barang'];
    $keterangan_barang = $_POST['keterangan_barang'];
    $stok = $_POST['stok_barang'];

    
    $database ="UPDATE data_barang SET jenis_barang = '$kategori', nama_barang = '$nama_barang', harga_barang = '$harga_barang', keterangan_barang= '$keterangan_barang', stok_barang= '$stok' WHERE id_barang = '$id'";
    $hasil=mysqli_query($conn, $database);

    header('location: index.php');
}

?>
