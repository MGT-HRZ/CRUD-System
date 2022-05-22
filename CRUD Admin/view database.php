<?php

    // Menyambungkan fail view database.php & config.php

    include_once "config.php";

    $sql = "SELECT * FROM users;";  // Menjalankan arahan SQL (SELECT * FROM)
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $numid = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>C.R.U.D | View Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view database.css?v=<?php echo time();?>">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
</head>

    <!-- navbar -->

<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(process/login.jpg); background-repeat: no-repeat; background-size: 100%;">
    <header>
        <div class="nav1">
            <div class="title">
                <h1>C.R.U.D</h1>
            </div>
                <nav>
                <ul>
                    <form action="search.php" method="POST">
                    <li class="current"><a href="index.php">Login</a></li>
                    <li><a href="view database.php">Database</a></li>
                    <li><input type="text" name="search" placeholder="Search Data"><button class="button2" name="btn_search"><div class="search">Search</div></button></li>
                    </form>
                </ul>
                </nav>
        </div>
    </header>

    <!-- navbar -->

    <br>

    <!-- Memaparkan jadual maklumat pengguna daripada pangkalan data -->

    <center>
    <table width="70%" style="border: 3px solid black; border-radius: 10px; background-color: white;">
        <thead>
            <th style="border-bottom: 3px solid black;">Id</th>
            <th style="border-bottom: 3px solid black;">Nama</th>
            <th style="border-bottom: 3px solid black;">Kelas</th>
            <th style="border-bottom: 3px solid black;">No. KP</th>
            <th style="border-bottom: 3px solid black;">Action</th>
        </thead>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['id']?></center></td> <!-- <?php //echo $numid++; ?> -->
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Email'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Usrname'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;"><center><?= $row['Password'] ?></center></td>
            <td style="border: 3px solid black; border-radius: 10px; background-color: silver;">
                <center>
                <button style="border-radius: 5px; border: 2px solid black; background-color: deepskyblue; width: 45%;"><a href="update.php?id=<?= $row['id']?>" style="text-decoration: none; color: white; font-family: 'Orbitron', sans-serif;">Update</a></button>
                |
                <button style="border-radius: 5px; border: 2px solid black; background-color: crimson; width: 45%;"><a href="delete.php?id=<?= $row['id']?>" style="text-decoration: none; color: white; font-family: 'Orbitron', sans-serif;">Delete</a></button>
                </center>
            </td>
        </tr>
        <?php }?>
    </table>
    </center>

    <!-- Memaparkan jadual maklumat pengguna daripada pangkalan data -->

    <div class="footer">
        <p>C.R.U.D &copy; 2.0.2.1</p>
    </div>
</body>
</html>
