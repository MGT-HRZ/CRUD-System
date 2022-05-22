<?php
    
    include_once "config.php";

    if (isset($_POST['btn_search'])) {
        $search = mysqli_real_escape_string($connect, $_POST['search']);
        $sql = "SELECT * FROM users WHERE Email LIKE '%$search%' OR Usrname LIKE '%$search%' OR Password LIKE '%$search%'";
        $result = mysqli_query($connect, $sql);
        $queryResult = mysqli_num_rows($result); 
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>C.R.U.D | Search</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="search2.css?v=<?php echo time();?>">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
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
            <div class="image">
                <?php echo "<br><center><h2>There's ".$queryResult." result found</h2></center>"; ?>
                <div class="formbox">
                    <?php
                            if ($queryResult > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    //echo "There are ".$queryResult." results found";
                                    //echo "<div class='row'><ul><li>E-mail</li><li>&nbspUsername</li><li>Password</li></ul></div><br><br>";
                                    echo "<div class='box'><ul><li>".$row['Email']."</li><li>".$row['Usrname']."</li><li>".$row['Password']."</li></ul></div><br><br><br>";
                                }
                            }
                            else {
                                echo "<center>There are no results matching your search !!!</center>"; 
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="footer">
                <p>C.R.U.D &copy; 2.0.2.1</p>
            </div>
    </body>
</html>