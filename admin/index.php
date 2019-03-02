<?php
	include '../config.php';
?>
<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
   <script src="../bootstrap/js/jquery.js"></script>
   <script src="../bootstrap/js/bootstrap.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>Admin Panel</title>
</head>
<body class="bg">      
	  <?php
        include 'head.php';
      ?>
	  <?php
	    if(empty($_SESSION['username'])){
    		header("location:../index.php?pesan=belum_login"); 
    	}
    ?>

<div class="container">
	<div class="container-fluid main-container">

		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Dashboard</b>
                </div>
                <div class="panel-body">
				<!--Fungsi Hitung-->
				<?php
                //menghitung jumlah surat masuk
				$hitung1 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_inventaris"));
				$hitung2 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_user"));
				//menghitung barang pinjam
				$hitung3 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_inventaris where status='DIPINJAM'"));
				//menhitung barang kembali
				$hitung4 = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_kembali"));
	            ?>
				<!--Akhir Fungsi-->
				<!--Hitung Jumlah Inventaris-->
				<div class="panel panel-info">
					<div class="panel-heading">
						<b>Data Inventaris</b>
					</div>
					<div class="panel-body">
						<p><?php echo '<h4>Jumlah : <font color="red"><b>'.$hitung1.'</b></font> Barang</h4>'; ?>
						<div align="right">
							<?php
                        		if($_SESSION['jabatan'] == "Admin"){ ?>
								<a href="../input.php" class="btn btn-md btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Input Data</a>
							<?php }?>
								<a href="../view.php" class="btn btn-md btn-warning">
								<span class="glyphicon glyphicon-th-list"></span> Lihat Data</a> 
							
								<a href="../laporan_inv.php" class="btn btn-md btn-info">
    							<span class="glyphicon glyphicon-file"></span> Laporan</a> 
							
						</div></p>
					</div>
				</div>
				<!--Hitung Pinjam-->
				<div class="panel panel-success">
					<div class="panel-heading">
						<b>Data Pinjam & Kembali</b>
					</div>
					<div class="panel-body">
						<p>
						<?php echo '<h4>Dipinjam : <font color="red"><b>'.$hitung3.'</b></font> Barang</h4>'; ?></br>
						<?php echo '<h4>Data Pinjam/Kembali : <font color="red"><b>'.$hitung4.'</b></font> Transaksi</h4>'; ?>
						<div align="right">
								<a href="../pinjam.php" class="btn btn-md btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Pinjam Barang</a> 
								<a href="../pinjam_view.php" class="btn btn-md btn-warning">
								<span class="glyphicon glyphicon-th-list"></span> Daftar Pinjam</a> 
								<a href="../kembali_view.php" class="btn btn-md btn-info">
    							<span class="glyphicon glyphicon-file"></span> Laporan Pinjam/Kembali</a> 
						</div></p>
					</div>
				</div>
				<!--Hitung User-->
				<div class="panel panel-warning">
					<div class="panel-heading">
						<b>Data Pengguna</b>
					</div>
					<div class="panel-body">
						<p>
						<?php echo '<h4>Pengguna : <font color="red"><b>'.$hitung2.'</b></font> Akun</h4>'; ?></br>
						<div align="right">
							<?php
                        		if($_SESSION['jabatan'] == "Admin"){ ?>
                           			<a href="user_new.php" class="btn btn-md btn-success">
									<span class="glyphicon glyphicon-pencil"></span> Tambah Akun</a>
                    		<?php } ?> 
								<a href="user_view.php" class="btn btn-md btn-warning">
								<span class="glyphicon glyphicon-th-list"></span> Lihat Daftar Akun</a> 
						</div></p>
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