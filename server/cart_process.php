<?php
include "connection.php";
$jumlah = $_POST['jumlah'];
$id = mysqli_real_escape_string($connect, $_GET['id']);
$query = 'SELECT nama, harga  FROM jasa WHERE id = ' . $id . '';
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);

echo $jumlah;
echo $row['nama'];
echo $row['harga'];
