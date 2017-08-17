<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	</head>
	<body>
		<!-- Header -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header text-center">
						<a href="#"><img src="assets/images/logo.png" alt="Responsive image"></a>
						<h3 style="font-family: calibri;">Buku Telpon XII RPL 2</h3>
					</div>
				</div>
			</div>
		</div>

		<!-- Navbar-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="index.php">Home</a></li>
						<li role="presentation"><a href="add.php">Tambah Nomer</a></li>
						<li role="presentation"><a href="about.php">About</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Pencarian-->
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Cari Kontak Siswa</div>
				<div class="panel-body">
					<form name="form1" method="POST" class="form-inline">
						<div class="form-group">
							<input type="text" name="cari" id="cari" class="form-control" placeholder="masukan nama kontak">
						</div>
						<input type="submit" name="caridata" value="Cari Kontak" class="btn btn-warning">
					</form>

					
				</div>
			</div>
		</div>

		<!-- Pesan -->
		<div class="container">
			<div class="alert alert-info text-center" style="">
				<strong>Info! : </strong>Aplikasi ini digunakan untuk mempermudah pencarian kontak XII RPL 2.
			</div>
		</div>

		<!-- Hasil -->
		<?php
			$cari = @$_POST['cari']; 
        	$caridata = @$_POST['caridata'];

            // jika tombol cari di klik
			if($caridata) {

            // jika kotak pencarian tidak sama dengan kosong
            if($cari != "") {
            // query mysql untuk mencari berdasarkan nama negara. .
                $sql = mysqli_query( $db , "SELECT * FROM daftar where nama like '%$cari%'") or die (mysqli_error());   

                // mengecek data
                $cek = mysqli_num_rows($sql);
                // jika data kurang dari 1
                if($cek <1) {
                    ?>
                <script type="text/javascript">alert("Data Tidak Ditemukan")</script>
                <?php
                    } else {
					// mengulangi data agar tidak hanya 1 yang tampil
                    while($data = mysqli_fetch_array($sql)) {
					?>
                    <div class="container">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Hasil</div>
                            <div class="panel-body">
                                <div class="table-responsive">
	                                <table class="table" style="margin-bottom:0;">
		                                <thead style="background: orange;">
		                                    <tr>
		                                        <td>Nama</td>
		                                        <td>Alamat</td>
		                                        <td>Nomer Telpon</td>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                    <tr>
		                                        <td><?php echo $data['nama'] ?></td>
		                                        <td><?php echo $data['alamat'] ?></td>
		                                        <td><?php echo $data['telpon'] ?></td>
		                                    </tr>
		                                </tbody>
	                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                      }
                	}
                } 
            }
		?>
		<!--Footer -->
		<footer>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy; Copyright 2017 | Built. <a href="http://instagram.com/ssd_doy">SSD_DOY</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
