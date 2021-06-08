<?php
include 'koneksi.php';

$id = $_GET['id'];
$database = "DELETE FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $database);

header('location: index.php');

?>