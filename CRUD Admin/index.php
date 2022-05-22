<!DOCTYPE html>     <!-- Membuat Antaramuka Sistem -->
<html>
    <head>
        <title>C.R.U.D | Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script type="text/javascript" src="clock.js"></script>
        <script type="text/javascript" src="countdown.js"></script>
        <link rel="stylesheet" type="text/css" href="login.css?v=<?php echo time();?>">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    </head>
    <body onload="realtimeclock(), countdown()">
        <!--HEADER-->
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
        <!--HEADER-->
        <!--BODY-->
            <div class="image">
                <!--<table>
                    <tr>
                        <td id="days"></td>
                        <td id="hours"></td>
                        <td id="minutes"></td>
                        <td id="seconds"></td>
                    </tr>
                </table>-->
                <div class="datetime"><div id="clock"><br></div><div id="date"><?php echo date("d/m/Y"); ?></div></div> <!--< date " l " = hari >-->
                <div class="formbox">
                    <div class="button">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Login</button>
                        <button type="button" class="toggle-btn" onclick="signup()">Sign-up</button>
                    </div>
                    <div class="icon">
                        <a href="https://www.facebook.com/"><img src="process/iconfinder_1_Facebook_colored_svg_copy_5296499.png" width="7%"></a>
                        <a href="https://twitter.com/?lang=en"><img src="process/iconfinder_Twitter_1082437.png" width="7%"></a>
                        <a href="https://www.instagram.com/"><img src="process/iconfinder_2018_social_media_popular_app_logo_instagram_3225191.png" width="7%"></a>
                    </div>
                    <form id="login" class="group">
                        <input type="text" class="field" placeholder="Username" required>
                        <input type="text" class="field" placeholder="Password" required>
                        <input type="checkbox" class="check"><span>Remember Password</span>
                        <button type="submit" class="submit">Login</button>
                    </form>
                    <!--SIGN UP-->
                    <form id="signup" class="group" action="tambah.php" method="POST">
                        <input type="text" class="field" name="email" placeholder="Email" required>
                        <input type="text" class="field" name="usrnme" placeholder="Username" required>
                        <input type="password" class="field" name="pwd" placeholder="Password" required>
                        <input type="checkbox" class="check"><span>I agree to the terms & conditions</span>
                        <button type="submit" name="submit" class="submit">Register</button>
                    </form>
                    <!--SIGN UP-->
                </div>
                <script>
                    var x = document.getElementById("login")
                    var y = document.getElementById("signup")
                    var z = document.getElementById("btn")

                    function signup() {
                        x.style.left = "-400px"
                        y.style.left = "50px"
                        z.style.left = "110px"
                    }
                    function login() {
                        x.style.left = "50px"
                        y.style.left = "450px"
                        z.style.left = "0"
                    }
                </script>
            </div>
            <!--BODY-->
            <!--FOOTER-->
            <div class="footer">
                <p>C.R.U.D &copy; 2.0.2.1</p>
            </div>
            <!--FOOTER-->
    </body>
</html>