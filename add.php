<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <style type="text/css">
            .form-grup {
                margin-bottom: 20px;
            }
        </style>
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
                        <li role="presentation"><a href="http://buku.gedhe.or.id">Home</a></li>
                        <li role="presentation" class="active"><a href="add.php">Tambah Nomer</a></li>
                        <li role="presentation"><a href="about.php">About</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Form Tambah Kontak -->

        <div class="container">
             <div class="panel panel-primary">
                 <div class="panel-heading">Tambah Kontak Siswa</div>
                 <div class="panel-body">
                     <form action="proses.php" method="post">
                         <div class="form-grup">
                             <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                         </div>
                         <div class="form-grup">
                             <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" required>
                         </div>
                         <div class="form-grup">
                             <input type="text" name="telpon" class="form-control" placeholder="Nomer Telpon" required>
                         </div>
                         <center><div class="form-grup">
                             <input type="submit" name="kirim" value="Submit" class="btn btn-success">
                         </div></center>
                     </form>
                 </div>
             </div>
        </div>

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