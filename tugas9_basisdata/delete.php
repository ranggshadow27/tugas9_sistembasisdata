<?php
include 'koneksi.php';

$id = $_GET['id'];
$barang = "DELETE FROM data_barang WHERE id_barang='$id'";
$pembeli = "DELETE FROM data_pembeli WHERE id_pembeli='$id'";

$resulta = mysqli_query($conn, $barang);
$resultb = mysqli_query($conn, $pembeli);

header('location: index.php');

?>