<?php
  session_start();
?>
<!DOCTYPE html>
<!-- index.php
  Home Page for Open Market website
 -->

<html lang="en" dir="ltr">
  <head>
    <title>Open Market</title>
    <meta charset="utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css"
      href="style.css" />
  </head>
  <body>
    <div class="catMiniLogo">
      <img src="pix/Logo.PNG" alt="Open Market Logo" id="miniLogo">
    </div>
    <div class="searchBox" style="float: left;left: 36%;">
      <input class="searchText" type="text" name="searchBox"
        placeholder="Search for Category" size="45"/>
      <a class="searchButton">
        <img src="pix/searchIcon.png" class="searchIcon" alt="search icon"
          id="searchIcon">
      </a>
    </div>
    <div class="cart">
    /  <figure>
        <a href="shoppingCart.php">
          <img src="pix/Cart.png" alt="cart icon" id="cartIcon">
        </a>
      </figure>
    </div>
    <div class="catMenu">
      <ul>
        <li><a href="index.php" class="index">Home</a></li>
        <li><a>Catalog</a>
          <ul>
            <li><a href="category.php" id="category">Our Products</a></li>
          </ul>
        </li>
        <li><a>About Us</a>
          <ul>
            <li>
							<a href="missionStatement.php" id="mission">Our Mission</a>
						</li>
            <li><a href="ourTeam.php" id="ourTeam">Our Team</a></li>
            <li><a href="contactUs.php" id="contactUs">Contact Us</a></li>
          </ul>
        </li>
        <li><a>Members</a>
          <ul>
            <li><a href="login.php" id="login">Login</a></li>
            <li><a href="createLogin.php" id="create-Login">Sign Up</a></li>
          </ul>
      </ul>
    </div>
  </body>
</html>
