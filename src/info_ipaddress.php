<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$ipaddress = $data['ip_address'];
if ($ipaddress == "") $ipaddress = 0;
echo $ipaddress;
