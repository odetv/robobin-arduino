<?php
include('src/koneksi.php');

$ip_address = $_GET['ip_address'];

$input = mysqli_query($koneksi, "INSERT INTO tb_info (ip_address) VALUES ('$ip_address')");
if ($input == TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Failed inserting data";
}