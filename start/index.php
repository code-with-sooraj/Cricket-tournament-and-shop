<?php
session_start();
$regd = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Website</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>

<body>
    <div class="main">
        <div class="container-1">
            <div class="img">
                <img src="image/vignanLogo.png" alt="not available" width="200px" height="100px">
            </div>
            <div class="title">
                <h1>Cricket Website</h1>
            </div>
        </div>

        <nav>
            <a href=""><i class="fa-solid fa-house"></i> &nbsp;Home</a>
            <a href="../navigation/team/team.php"><i class="fa-solid fa-people-group"></i>&nbsp;Teams</a>
            <a href="../navigation/players/player.php"><i class="fa-solid fa-users"></i>&nbsp;Players</a>
            <a href="../navigation/shop/shop.php"><i class="fa-solid fa-shop"></i>&nbsp;Shop</a>
            <a href="../navigation/about/about.php"><i class="fa-solid fa-address-card"></i>&nbsp;About Us</a>
            <a href="../navigation/profile/profile.php"><i class="fa-solid fa-circle-user"></i>&nbsp;Profile</a>
            <a href="../navigation/logout/logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
        </nav>

        <div class="container-2">
            <div class="slideshow-container">
                
                <div class="mySlides">
                    <img src="image/batting.gif" alt="Slide 1">
                </div>

                <div class="mySlides">
                    <img src="image/bowling.gif" alt="Slide 2">
                </div>

                <div class="mySlides">
                    <img src="image/wicketkipping.gif" alt="Slide 3">
                </div>

                <div style="text-align: center;">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; 2023 Cricket Website. All rights reserved.</p>
        </footer>
    </div>
    <script src="slideshow.js"></script>
</body>

</html>