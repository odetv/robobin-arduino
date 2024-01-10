<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$jarakobjek = $data['jarak_objek'];
if ($jarakobjek == "") $jarakobjek = 0;
echo $jarakobjek;
