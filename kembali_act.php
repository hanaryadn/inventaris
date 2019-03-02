<?php

include 'config.php';

$id = $_POST['id'];
$status = $_POST['status'];
$nomer = $_POST['nomer'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$peminjam = $_POST['peminjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tujuan = $_POST['tujuan'];

$sql1 =  "update tbl_inventaris set status='$status' where id='$id'";
$sql2 = "insert into tbl_kembali values('', '$nomer', '$nama', '$jenis', '$jumlah', '$peminjam', '$tgl_pinjam', '$nik', '$alamat', '$tujuan', '$tgl_kembali')";

mysqli_query($koneksi, $sql1);
mysqli_query($koneksi, $sql2);

header("location:kembali_view.php?pesan=dikembalikan");

?>
