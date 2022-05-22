<?php 	

	// Membuat arahan untuk menyambung ke pangkalan data
	// Membolehkan fungsi seperti tambah, kemaskini dan delete dijalankan dipermukaan antaramuka

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "crud";

	$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>