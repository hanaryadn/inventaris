<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SINVEDES PENGADANGAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/log.css" />
    <script src="main.js"></script>
</head>
<body class="bg">

<?php
    include 'template/head.php';
?>
<div class="container">
	<div class="container-fluid main-container">

		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Login Admin</b>
                </div>
<div class="panel-body">

    <?php
    if(!empty($_SESSION['username'])){
        header("location:admin");
    }
    ?>

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            
        
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "  <div class='alert alert-danger'>
                                    Login Gagal! Username atau Password Salah!
                                </div>";
                }else if($_GET['pesan'] == "logout"){
                        echo "  <div class='alert alert-info'>
                                    Anda telah berhasil Keluar
                                </div>";
                }else if($_GET['pesan'] == "belum_login"){
                        echo "  <div class='alert alert-warning'>
                                    Anda harus Login dulu!
                                </div>";
                    }
                }
            ?>
               
            <div class="account-wall">
                <img class="profile-img" src="img/pp.png"
                    alt="">
                <form class="form-signin" method="POST" action="auth.php">
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                </br>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                </br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Masuk</button>
                
                </form>
            </div>
            
        </div>
    </div>
</div>
    </div>
            </div>
        </div>
    </div>
</div>
<p>
<p>
<?php
    include 'template/foot.php';
?>
</body>
</html>
