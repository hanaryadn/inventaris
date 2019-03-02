<!DOCTYPE html>
<?php
    include 'config.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Inventaris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <script src="main.js"></script>
</head>
<body class="bg">
    <?php
        include 'template/head.php';
    ?>
    <?php
    
    if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login"); 
    }
    ?>

    
<div class="container">
	<div class="container-fluid main-container">
		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b><a href="admin" class="btn btn-md btn-info">
        <span class="glyphicon glyphicon-home"></span> Kembali ke Beranda</a> </b>
                </div>
    <div class="panel-body">
    <div class="row">

    <div class="col-sm-10 col-sm-offset-1 page-header">
        <h1>Laporan Data Inventaris</h1>
    </div>
    
    

    <div class="col-sm-12">
        <a href="print.php" class="btn btn-sm btn-success">
        <span class="glyphicon glyphicon-print"></span> Print Data</a> 
        <p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No. Inventaris</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Sumber</th>
                    <th>Tgl. Beli</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi, "select * from tbl_inventaris where nama like '%".$cari."%'");
            }else{
                $data = mysqli_query($koneksi, "select * from tbl_inventaris ORDER BY id DESC");
            }
                $no = 1;
            while($d = mysqli_fetch_array($data)){
        ?>
            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nomer']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['merk']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                    <td><?php echo $d['sumber']; ?></td>
                    <td><?php echo $d['tanggal']; ?></td>
                    <td><?php echo $d['ket']; ?></td>
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
</div>
    </div>
            </div>
        </div>
    </div>
</div>
<?php
        include 'template/foot.php';
    ?>
</body>
</html>