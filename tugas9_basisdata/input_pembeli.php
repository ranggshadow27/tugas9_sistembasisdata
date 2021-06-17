<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
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
    echo 'Tidak ada aksi klik pada tombol form<br/>';
    }
?>
