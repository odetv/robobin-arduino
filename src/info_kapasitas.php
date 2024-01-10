<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$kapasitas = $data['kapasitas'];
if ($kapasitas == "") $kapasitas = 0;
echo $kapasitas;
