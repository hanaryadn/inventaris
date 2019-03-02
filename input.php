<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Inventaris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
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

    <?php
    if($_SESSION['jabatan']!="Admin"){
    header("location:index.php"); 
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
    <div class="col-sm-10 col-sm-offset-1 page-header">
        <h1><center>Tambah Data Inventaris</center></h1>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST" action="action.php">
                <div class="form-group">
    			    <label>No. Inventaris</label>
                    <input type="hidden" name="status" value="ADA">
    			    <input type="text" class="form-control" id="nomer" name="nomer" placeholder="Isi No. Inventaris" required>
                 </div>
                <div class="form-group">
                    <label>Merk / Type</label>
    			    <input type="text" class="form-control" id="merk" name="merk" placeholder="Isikan Merk dan Type jika ada">
                </div> 
                 <div class="form-group">
                    <label>Jenis / Kategori</label>
    			    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis / Kategori Barang" required>
                </div> 
                <div class="form-group">
                    <label>Tanggal Beli/diadakan</label>
    			    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pengadaan" required>
  		        </div>
                <div class="form-group">
    			    <textarea class="form-control" name="ket" placeholder="Keterangan (Opsional)"></textarea>
  		        </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button> <button type="reset" class="btn btn-primary">Reset</button> <a href="view.php"><span class="btn btn-danger">Batal</span></a>
                </div>
                                 
        </div>
        <div class="col-sm-3">
                <div class="form-group">
                    <label>Nama Barang</label>
    			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
    			    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="0" required>
  		        </div>
                <div class="form-group">
                    <label>Sumber</label>
    			    <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Diadakan dari?" required>
  		        </div>
            
            </form>
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