<?php
include 'src/koneksi.php';
$nilai = $_GET["ipaddress"];
mysqli_query($koneksi, "UPDATE tb_info SET ip_address='$nilai'");
