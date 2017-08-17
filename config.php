<?php

	$server = "localhost";
	$user = "u0055102_buku";
	$pass = "merdeka1945";
	$db_name ="u0055102_buku";

	$db = mysqli_connect($server, $user, $pass, $db_name);

	if (!$db) {
		die("Gagal Konek Database". mysqli_connect_error());
	}

?>