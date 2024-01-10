<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$jaraksampah = $data['jarak_sampah'];
if ($jaraksampah == "") $jaraksampah = 0;
echo $jaraksampah;
