<?php 

    include_once "config.php";

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>C.R.U.D | User View </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="user view.css?v=<?php echo time();?>">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
</head>
<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(process/login.jpg); background-repeat: no-repeat; background-size: 100%;">
    <header>
        <div class="nav1"> 
            <div class="title">
                <h1>C.R.U.D</h1>
            </div>
                <nav>
                <ul>
                    <form action="search2.php" method="POST">
                    <li class="current"><a href="index.php">Login</a></li>
                    <li><a href="user view.php">User View</a></li>
                    <li><input type="text" name="search" placeholder="Search Data"><button class="button2" name="btn_search"><div class="search">Search</div></button></li>
                    </form>
                </ul>
                </nav>
        </div>
    </header>
    <br>
    <center>
    <table width="70%" style="border: 3px solid black; border-radius: 10px; background-color: white;">
        <thead>
            <th style="border-bottom: 3px solid black;">Id</th>
            <th style="border-bottom: 3px solid black;">E-mail</th>
            <th style="border-bottom: 3px solid black;">Username</th>
            <th style="border-bottom: 3px solid black;">Password</th>
        </thead>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['id'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Email'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Usrname'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Password'] ?></center></td>
        </tr>
        <?php }?>
    </table>
    </center>
    <div class="footer">
        <p>C.R.U.D &copy; 2.0.2.1</p>
    </div>
</body>
</html>