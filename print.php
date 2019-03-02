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
<body>    

<div class="row">

    <div class="col-sm-4 col-sm-offset-4 page-header">
        <center>
        <h3>Data Inventaris</h3>
        <h4>Desa Pengadangan</h4>
        </center>
    </div>
    
    

    <div class="col-sm-8 col-sm-offset-2">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No. Inventaris</th>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Sumber</th>
                    <th>Tanggal Pengadaan</th>
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
    <script>
        window.print();
    </script>
</body>
</html>