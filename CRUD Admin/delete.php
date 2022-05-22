<?php
	
	// Menyambungkan fail delete.php & config.php

	include_once "config.php";

	$id = $_GET['id'];	// Menggunakan $_GET[''];
	$sql = "DELETE FROM users WHERE id = '$id'";	// Menjalankan arahan SQL (DELETE)
	$result = mysqli_query($connect, $sql);

	if ($result) {
		header("Location: view database.php");	// Kembali ke fail view database.php
	}

	else {
		echo "Fail to Delete !!!";
	}

?>