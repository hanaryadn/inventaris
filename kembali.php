<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kembalikan Inventaris</title>
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
        <h1>Kembalikan Aset</h1>
    </div>

    <?php
        include 'config.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from tbl_inventaris where id='$id'");
            while($d = mysqli_fetch_array($data)){
    ?>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST" action="kembali_act.php">
                <div class="form-group">
    			    <label>No. Inventaris</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="hidden" name="status" value="ADA">
    			    <input type="text" class="form-control" id="nomer" name="nomer" placeholder="Isi No. Inventaris" value="<?php echo $d['nomer']; ?>" readonly>
                 </div>
                 <div class="form-group">
                    <label>Jenis</label>
    			    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis Barang" value="<?php echo $d['jenis']; ?>" readonly>
                </div> 
                <div class="form-group">
                    <label>Nama Peminjam</label>
    			    <input type="text" class="form-control" id="peminjam" name="peminjam" placeholder="Isi Sesuai KTP" value="<?php echo $d['peminjam']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <label>No. KTP</label>
    			    <input type="text" class="form-control" id="nik" name="nik" placeholder="Isi Sesuai KTP" value="<?php echo $d['nik']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
    			    <input type="text" class="form-control" id="tanggal" name="tgl_pinjam" value="<?php echo $d['tgl_pinjam']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kembalikan</button> <a href="pinjam_view.php"><span class="btn btn-danger">Batal</span></a>
                </div>
                                 
        </div>
        <div class="col-sm-3">
                <div class="form-group">
                    <label>Nama Barang</label>
                    
    			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="<?php echo $d['nama']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
    			    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $d['jumlah']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <label>Alamat</label>
    			    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isi Sesuai KTP" value="<?php echo $d['alamat']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <label>Tujuan Pinjam</label>
    			    <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Dipakai Untuk?" value="<?php echo $d['tujuan']; ?>" readonly>
  		        </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
    			    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
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