<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buat Akun Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body class="bg">

    <?php
        include 'head.php';
    ?>

    <?php
    if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login"); 
    }
    ?>
    
    <?php
    if($_SESSION['jabatan']!="Admin"){
    header("location:../index.php"); 
    }
    ?>

<div class="container">
	<div class="container-fluid main-container">

		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b><a href="../index.php" class="btn btn-md btn-info">
                    <span class="glyphicon glyphicon-home"></span> Kembali ke Beranda</a> </b>
                </div>
    <div class="panel-body">
    <div class="col-sm-10 col-sm-offset-1 page-header">
        <h1><center>Buat Akun Baru</center></h1>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <form class="form-horizontal" method="POST" action="user_act.php">
                <div class="form-group">
    			    <label>Nama</label>
    			    <input type="text" class="form-control" name="nama" placeholder="Isi Nama ..." required>
                 </div>
                <div class="form-group">
                    <label>Jabatan / Pekerjaan</label>
    			    <input type="text" class="form-control" name="jabatan" placeholder="Isi Jabatan / Pekerjaan ..." required>
                </div> 
                 <div class="form-group">
                    <label>Alamat</label>
    			    <input type="text" class="form-control" name="alamat" placeholder="Isi Alamat ..." required>
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button> <button type="reset" class="btn btn-primary">Reset</button> <a href="user_view.php"><span class="btn btn-danger">Batal</span></a>
                </div>
                                 
        </div>
        <div class="col-sm-3">
                <div class="form-group">
                    <label>Username</label>
    			    <input type="text" class="form-control" name="username" placeholder="Isi Username untuk Masuk Aplikasi" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
    			    <input type="text" class="form-control" name="password" placeholder="Isi Password untuk Masuk Aplikasi" required>
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
        include '../template/foot.php';
    ?>
</body>
</html>