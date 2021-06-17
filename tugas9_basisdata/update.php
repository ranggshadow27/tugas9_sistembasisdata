<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $id = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_detail_barang = $_POST['id_detail_barang'];
    $id_distributor = $_POST['id_distributor'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];

    
    $databarang ="UPDATE data_barang SET id_detail_barang = '$id_detail_barang', nama_barang = '$nama_barang', harga_barang = '$harga_barang', id_distributor= '$id_distributor', stok_barang= '$stok_barang' WHERE id_barang = '$id'";
    $hasil=mysqli_query($conn, $databarang);

    header('location: index.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_pembeli']))
{
    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $tgl_transaksi_pembelian = $_POST['tgl_transaksi_pembelian'];
    $id_barang = $_POST['id_barang'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $jumlah_uang_kembali = $_POST['jumlah_uang_kembali'];

    
    $datapembeli ="UPDATE data_pembeli SET nama_pembeli = '$nama_pembeli', tgl_transaksi_pembelian = '$tgl_transaksi_pembelian', id_barang = '$id_barang', jumlah_transaksi= '$jumlah_transaksi', jumlah_uang_kembali= '$jumlah_uang_kembali' WHERE id_pembeli = '$id_pembeli'";
    
    $hasilpembeli=mysqli_query($conn, $datapembeli);

    header('location: index.php');
}else{
    echo 'Eror Boi';
}

?>
