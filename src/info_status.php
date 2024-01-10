<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_info ORDER BY id DESC");
$data = mysqli_fetch_array($sql);
$status = $data['status'];
if ($status == "") $status = 0;
echo $status;
