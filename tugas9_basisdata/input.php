<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $nama_barang = $_POST['nama_barang'];
    $id_detail_barang = $_POST['id_detail_barang'];
    $id_distributor = $_POST['id_distributor'];
    $stok_barang = $_POST['stok_barang'];
    $harga_barang = $_POST['harga_barang'];
    
    $databarang ="INSERT INTO data_barang (nama_barang, id_detail_barang, id_distributor, stok_barang, harga_barang) VALUES('$nama_barang','$id_detail_barang','$id_distributor','$stok_barang','$harga_barang')";
    mysqli_query($conn, $databarang);
    
    header('location: index.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_pembeli']))
{
    $nama_pembeli = $_POST['nama_pembeli'];
    $tgl_transaksi_pembelian = $_POST['tgl_transaksi_pembelian'];
    $id_barang = $_POST['id_barang'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $jumlah_uang_kembali = $_POST['jumlah_uang_kembali'];
    
    $datapembeli ="INSERT INTO data_pembeli (nama_pembeli, tgl_transaksi_pembelian, id_barang, jumlah_transaksi, jumlah_uang_kembali) VALUES('$nama_pembeli','$tgl_transaksi_pembelian','$id_barang','$jumlah_transaksi','$jumlah_uang_kembali')";
    mysqli_query($conn, $datapembeli);
    
    header('location: index.php');
}else{
    echo 'Eror Boi<br/>';
    }
?>
