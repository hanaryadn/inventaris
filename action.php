<?php

include 'config.php';

$nomer = $_POST['nomer'];
$nama = $_POST['nama'];
$merk = $_POST['merk'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$sumber = $_POST['sumber'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$ket = $_POST['ket'];
$peminjam = $_POST['peminjam'];
$tanggal = $_POST['tanggal'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tujuan = $_POST['tujuan'];

mysqli_query($koneksi, "insert into tbl_inventaris values('', '$nomer', '$nama', '$merk', '$jenis', '$jumlah', '$sumber', '$tanggal', '$status', '$ket', peminjam='$peminjam', nik='$nik', alamat='$alamat', tgl_pinjam='$tgl_pinjam', tujuan='$tujuan')");

header("location:view.php?pesan=ditambahkan");

?>
