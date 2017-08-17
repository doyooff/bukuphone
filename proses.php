<?php
  include 'config.php';
  // cek apakah tombol daftar sudah di klik atau belum?
  if (isset($_POST['kirim'])) {
  // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];

    // buat query
    $sql = "INSERT INTO daftar (nama, alamat, telpon) VALUE ('$nama', '$alamat', '$telpon')";
    $query = mysqli_query($db, $sql);

    // apakah query berhasil disimpan??
    if ($query) {
      // kalau berhasil alihkan ke halaman index.php dengan status=sukses
      header('Location: http://buku.gedhe.or.id');

      } else {
      // kalau gagal alihkan ke halaman index.php dengan status=gagal
      header('Location: http://buku.gedhe.or.id?status=gagal');
      } 
    }else {
      die("Akses dilarang...");
  }
?>