<?php

    include_once "config.php";

    $usrnme = $_POST['user'];
    $pwd = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE Usrname = '$usrnme' AND Password = '$pwd'";
    $results = mysqli_query($connect, $sql);

    $rows = mysqli_num_rows($results);

    if($rows > 0){
        header("Location: view database.php?username = ".$usrnme);
    }

    else{
        header("Location: index.php?fail-login");
    }

?>