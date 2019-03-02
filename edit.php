<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Inventaris</title>
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
    <div class="col-sm-6 col-sm-offset-3 page-header">
        <h1>Edit Data Inventaris</h1>
    </div>

    <?php
        include 'config.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from tbl_inventaris where id='$id'");
            while($d = mysqli_fetch_array($data)){
    ?>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST" action="update.php">
                <div class="form-group">
    			    <label>No. Inventaris</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    			    <input type="text" class="form-control" id="nomer" name="nomer" placeholder="Isi No. Inventaris" value="<?php echo $d['nomer']; ?>" required>
                 </div>
                <div class="form-group">
                    <label>Merk / Type</label>
    			    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $d['merk']; ?>" placeholder="Isikan Merk dan Type jika ada">
                </div> 
                 <div class="form-group">
                    <label>Jenis / Kategori</label>
    			    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis Barang" value="<?php echo $d['jenis']; ?>" required>
                </div> 
                <div class="form-group">
                    <label>Tanggal Beli/diadakan</label>
    			    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pengadaan" value="<?php echo $d['tanggal']; ?>" required>
  		        </div>
                <div class="form-group">		    
    			    <textarea class="form-control" name="ket" placeholder="Keterangan (Opsional)"><?php echo $d['ket']; ?></textarea>
  		        </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button> <a href="view.php"><span class="btn btn-danger">Batal</span></a>
                </div>
                                 
        </div>
        <div class="col-sm-3">
                <div class="form-group">
                    <label>Nama Barang</label>
    			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="<?php echo $d['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
    			    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="0" value="<?php echo $d['jumlah']; ?>" required>
  		        </div>
                <div class="form-group">
                    <label>Sumber</label>
    			    <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Diadakan dari?" value="<?php echo $d['sumber']; ?>" required>
  		        </div>            
            
            </form>
        </div>
    </div>

        <?php
        }
        ?>

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