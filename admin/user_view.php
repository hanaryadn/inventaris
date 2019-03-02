<!DOCTYPE html>
<?php
    include '../config.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <script src="main.js"></script>
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

<div class="container">
	<div class="container-fluid main-container">
		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b><a href="../index.php" class="btn btn-md btn-info">
                    <span class="glyphicon glyphicon-home"></span> Kembali ke Beranda</a> </b>
                </div>
    <div class="panel-body">    
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1 page-header">
        <h1>Daftar Pengguna
        <form class="navbar-form pull-right" action="user.php" method="get">
            <div class="form-group">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nama Pengguna">
            <button type="submit" value="cari" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari</button>
            </div>
        </form>
        </h1>
        
    </div>
    
    

    <div class="col-sm-12">
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian untuk <u>".$cari."</u></b> <a href='user.php' class='btn btn-xs btn-danger'>Hapus</a>
            <hr>
            ";
            }
        ?>

        <?php
            if($_SESSION['jabatan'] == "Admin"){ ?>
                <a href="user_new.php" class="btn btn-sm btn-success">
                <span class="glyphicon glyphicon-plus"></span> Buat Akun</a> 
        <?php } ?>
        <p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan / Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Password</th>
            <?php
                if($_SESSION['jabatan'] == "Admin"){ ?>
                    <th width='150px'>Aksi</th>
            <?php } ?>
                </tr>
            </thead>
        <?php
            $halaman = 10;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = mysqli_query($koneksi, "SELECT * FROM tbl_user");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);
            $no = $mulai+1;
            
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi, "select * from tbl_user where nama like '%".$cari."%'");
            }else{
                $data = mysqli_query($koneksi, "select * from tbl_user ORDER BY id DESC LIMIT $mulai, $halaman");
            }
                $no = 1;
            while($d = mysqli_fetch_assoc($data)){
        ?>
            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['password']; ?></td>
            <?php
                if($_SESSION['jabatan'] == "Admin"){ ?>
                    <td>
                        <a href="user_delete.php?id=<?php echo $d['id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> HAPUS</a></td>
            <?php } ?>
                </tr>
        <?php } ?>
            </tbody>
        </table>
    <div align="right">
        <ul class="pagination">
            <li><span class="btn btn-primary">Halaman</span></li>
            <li><?php    
                for ($i=1; $i<=$pages; $i++){ ?>
                    <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php } ?>
            </li>
        </ul>
    </div>
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