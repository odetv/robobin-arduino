<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$dayabaterai = $data['daya_baterai'];
if ($dayabaterai == "") $dayabaterai = 0;
echo $dayabaterai;
