<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Pet Food Store</title>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" >
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/script.js"></script>
</head>
<body onload="moveAd(), moveText(), invoice()">
<div class = "header">
    <img src = "images/mainimage.jpg" alt="Petfood Main Image">
    <div class="logo"><img src="images/logo.png" alt="Petfood Logo"></div>
    <div id="dogfp"><span id="logoText">Welcome to the Pet Food Store</span></div>
</div>

<div id = "nav">
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <?php include "category.php";?>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="register.php">Register Now</a></li>
    </ul>
</div>
<div id = "Main">
    <table id = "maintable">
        <tr>
            <td id="leftside">
                <div id ="sideAdv">
                    <img src = "images/food2.jpg" id="sideImage">
                    <p id = "text1">Welcome</p>
                    <p id = "text2">The Pet food Shop</p>
                </div>
            </td>
            <td id="middlecontent">
                <div style="width: 80%">
                    <?php include "Cart.php"; ?>
                </div>

            </td>
            <td id="rightside">

                <br><br>
                <?php include "login.php"; ?><br>
                <?php include "category.php"; ?><br><br>
                <li class="button"><a href="showCart.php">Shopping Cart</a></li>
                <?php
                @session_start();
                if (isset($_SESSION["userID"])){
                    ?>
                    <li class="button"><a href="yourOrder.php">My Orders</a></li><br><br>

                    <?php
                }

                ?>
                <h2 align="center" style="color: maroon">Free Delivery for purchase over $300</h2>


            </td>
        </tr>
    </table>
</div>


<?php include "footer.php" ?>

</body>
</html>