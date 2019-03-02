<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbl_inventaris where id='$id'");

header("location:view.php?pesan=dihapus");
?>