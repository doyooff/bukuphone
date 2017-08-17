<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db_name ="buku";

	$db = mysqli_connect($server, $user, $pass, $db_name);

	if (!$db) {
		die("Gagal Konek Database". mysqli_connect_error());
	}

?>
