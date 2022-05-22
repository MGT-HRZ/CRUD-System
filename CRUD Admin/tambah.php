<?php 	

	// Menambah data pengguna ke dalam pangkalan data 
	// (TO ADD USERS DETAILS TO THE DATABASE)

	include_once "config.php";

	$Email = $_POST['email'];
	$Username = $_POST['usrnme'];
	$Password = $_POST['pwd'];

	$sql = "INSERT INTO users (Email, Usrname, Password) VALUES ('$Email', '$Username', '$Password');";
	mysqli_query($connect, $sql);	// Menjalankan arahan SQL (INSERT INTO)

	header("Location: index.php?register=complete");	// Kembali ke fail index.php

	/* $result = mysqli_query($connect, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo $row['Email']."<br>";
			echo $row['Usrname'];
		}
	} */
?>