<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['jenis_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok = $_POST['stok_barang'];
    $keterangan_barang = $_POST['keterangan_barang'];
    
    $data ="INSERT INTO data_barang (jenis_barang, nama_barang, keterangan_barang, harga_barang, stok_barang) VALUES('$kategori','$nama_barang','$keterangan_barang','$harga_barang','$stok')";
    mysqli_query($conn, $data);
    
    header('location: index.php');
    mysqli_query($conn, $databarang);
}
?>
