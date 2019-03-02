<?php

include 'config.php';

$id = $_POST['id'];
$status = $_POST['status'];
$nomer = $_POST['nomer'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$peminjam = $_POST['peminjam'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tujuan = $_POST['tujuan'];

$sql1 =  "update tbl_inventaris set status='$status', peminjam='$peminjam', nik='$nik', alamat='$alamat', tgl_pinjam='$tgl_pinjam', tujuan='$tujuan' where id='$id'";
//$sql2 = "insert into tbl_pinjam values('', '$nomer', '$nama', '$jenis', '$jumlah', '$peminjam', '$tanggal', '$nik', '$alamat', '$tujuan')";

mysqli_query($koneksi, $sql1);
//mysqli_query($koneksi, $sql2);

header("location:pinjam_view.php?pesan=dipinjam");

?>
