<?php
include "includes/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progear Hub Home Page</title>
    <link href="style.css" rel="stylesheet">
    <link href="PROGEAR LOGO.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--https://flickity.metafizzy.co/-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>
    <header class="header">
        <!-- header top row1 -->
        <div class="header-top-row">
            <div class="header-left">
                <img class="logo" src="PROGEAR LOGO.png", alt="Progear Hub Logo">
            </div>
            <div class="header-center">
                <h1 class="site-title" color:#f0c400>Progear Hub</h1>
            </div>

            <div class="header-right">
                <div class="menu-row">
                    <a href="login.php" class="menu-link" color:#f0c400>Login</a>
                    <a href="register.php" class="menu-link" color:#f0c400>Join us</a>
                </div>   
            </div>
        </div>

        <div class="header-bottom-row">
            <form class="search" method="get" action="search">
                <input type="search" placeholder="search for a product">
            </form>
        </div>

        <nav class="navigation">
            <a href="index.php" >Home</a>

            <!-- dropdown menu -->
            <div class="dropdown">
                <a href="shop.html" class="dropbtn">Shop</a>
                <div class="dropdown-content">
                    <div class="dropdown-column">
                        <h4>Women</h4>
                        <a href="shop.html?cat=women-top">Women's topwear</a>
                        <a href="shop.html?cat=women-bottom">Women's bottom</a>
                        <a href="shop.html?cat=women-footwear">Women's footwear</a>
                        <a href="shop.html?cat=women-accessories">Women's accessories</a>
                    </div>
                    <div class="dropdown-column">
                        <h4>Men</h4>
                        <a href="shop.html?cat=men-top">Men's topwear</a>
                        <a href="shop.html?cat=men-bottom">Men's bottom</a>
                        <a href="shop.html?cat=men-footwear">Men's footwear</a>
                        <a href="shop.html?cat=men-accessories">Men's accessories</a>
                    </div>
                    <div class="dropdown-column">
                        <h4>Kids</h4>
                        <a href="shop.html?cat=kids-top">Kids' topwear</a>
                        <a href="shop.html?cat=kids-bottom">Kids' bottom</a>
                        <a href="shop.html?cat=kids-footwear">Kids' footwear</a>
                        <a href="shop.html?cat=kids-accessories">Kids' accessories</a>
                    </div>
                </div>
            </div>

            <a href="orders.html">Orders</a>
            <a href="about.html">About Us</a>
            <a href="blog.html">Blog</a>
            <a href="contact.html">Contact Us</a>
        </nav>
    </header>        
    
    <main class="content">
        <!-- Women Section -->
        <h1 class="shop-title">Login html</h1>
        To be continued...
   
   
</body>
</html>