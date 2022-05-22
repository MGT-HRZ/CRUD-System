<?php

    // IMPORTANT_TO_KNOW_FOR_UPDATE :

    // 1. Check the SQL syntax for update & connection to the database
    // 2. After connection to the database, use variabel $_GET
    /* 3. Put <?php $_SERVER['PHP_SELF']?> in the <form> tag */
    /* 4. Put <?=$row_read['column_name']?> in every <input> tag to pull back the data */
    // 5. Don't forget to put <name="update"> in the submit / register / update in the <button> tag

    /*-------------------------------------------------------------------------------------------------------------*/

    //  Menyambungkan fail update.php & config.php

	include_once "config.php";

	$id = $_GET['id'];
	$sql_read = "SELECT * FROM users WHERE id = '$id'";
	$res_read = mysqli_query($connect, $sql_read);
	$row_read = mysqli_fetch_assoc($res_read);

	if (isset($_POST['update'])) {
		$val_email = $_POST['email'];
		$val_usrnme = $_POST['usrnme'];
		$val_pwd = $_POST['pwd'];

		$sql = "UPDATE users SET Email = '$val_email', Usrname = '$val_usrnme', Password = '$val_pwd' WHERE id = '$id'";
		$result = mysqli_query($connect, $sql);   // Menjalankan arahan SQL (UPDATE)

		if ($result) {
			header("Location: view database.php");   // Kembali ke fail view database.php
		}

		else {
			echo "Fail to Update !!!";
		}
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>C.R.U.D | Update</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="update.css?v=<?php echo time();?>">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>

            <!-- navbar -->

            <header>
            <div class="nav1">
                <div class="title">
                    <h1>C.R.U.D</h1>
                </div>
                    <nav>
                    <ul>
                        <li class="current"><a href="index.php">Login</a></li>
                        <li><a href="view database.php">Database</a></li>
                    </ul>
                    </nav>
                </div>
            </header>

            <!-- navbar -->

            <!-- Form untuk mengemaskini data pengguna -->

            <div class="image">
                <div class="formbox">
     				<form id="login" class="group" action="<?php $_SERVER['PHP_SELF']?>" method="POST">

						<h3>Update Your Data</h3>

						<input type="text" class="field" name="email" placeholder="Email" value="<?=$row_read['Email']?>">
    					<input type="text" class="field" name="usrnme" placeholder="Username" value="<?=$row_read['Usrname']?>">
    					<input type="text" class="field" name="pwd" placeholder="Password" value="<?=$row_read['Password']?>">
    					<br><br><br><br><br><br>
    					<button type="submit" name="update" class="submit" value="Update">Update</button>

    				</form>
                </div>
            </div>

            <!-- Form untuk mengemaskini data pengguna -->

            <div class="footer">
                <p>C.R.U.D &copy; 2.0.2.1</p>
            </div>
    </body>
</html>
