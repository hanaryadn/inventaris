<?php 
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<style type="text/css">
        body {
            background: #fff;
        }
        .bg::before {
            content: '';
            background-image: url('./img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: scroll;
            position: fixed;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.10;
            filter:alpha(opacity=10);
        }
        .bg-h::before {
            content: '';
            background-image: url('../img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: scroll;
            position: fixed;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0.10;
            filter:alpha(opacity=10);
        }
</style>


<div class="container">
<img style='width:100%' src='img/head.jpg'>
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><b><i class="glyphicon glyphicon-home"></i> Beranda</b></a>
        <a class="navbar-brand" href="halaman/tentang.php"><i class="glyphicon glyphicon-info-sign"></i> Tentang</a>
        <a class="navbar-brand" href="halaman/kritik_saran.php"><i class="glyphicon glyphicon-envelope"></i> Kritik & Saran</a>
    </div>
    <ul class="nav navbar-nav">
        <!--<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>-->
        
    <?php
        session_start();
            if (!empty($_SESSION['username'])){ ?>
		
        
    </ul>			
         <div class="btn pull-right">
                Masuk sebagai : <span class="btn btn-default btn-sm">            
                <?php echo "$_SESSION[nama] ($_SESSION[jabatan])"; ?></span> 
                <a href="logout.php" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-log-out"></span> Keluar</a> 
        </div>
                        
            
    <?php } ?>
    </div>
</nav>
</div>
</body>
</html>
