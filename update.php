<?php  
    include 'config.php';

$id = $_POST['id'];
$nomer = $_POST['nomer'];
$nama = $_POST['nama'];
$merk = $_POST['merk'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$sumber = $_POST['sumber'];
$tanggal = $_POST['tanggal'];
$ket = $_POST['ket'];

mysqli_query($koneksi, "update tbl_inventaris set nomer='$nomer', nama='$nama', merk='$merk', jenis='$jenis', jumlah='$jumlah', sumber='$sumber', tanggal='$tanggal', ket='$ket' where id='$id'");

header("location:view.php?pesan=diedit");

?>