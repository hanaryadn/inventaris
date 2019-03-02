<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_inventaris");

if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal atau Database Tidak ditemukan!!!" . mysqli_connect_error();
}
?>