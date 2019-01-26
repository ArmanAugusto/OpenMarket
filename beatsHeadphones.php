<?php
  require "header.php"
?>
<?php
/*
// session_start();
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }*/
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: beatsHeadphones.php");
  }
?>
<?php include('server.php') ?>
  <main>
    <br /><br /><br /><br /><br /><br /><br />
    <div class="content" style="color: black;">
      	<!-- notification message -->
      	<?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
          	<h3>
              <?php
              	echo $_SESSION['success'];
              	unset($_SESSION['success']);
              ?>
          	</h3>
          </div>
      	<?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        	<p style="color: black;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        	<p> <a href="index.php?logout='1'" style="color: black;">logout</a> </p>
        <?php endif ?>
    </div>
    <div class="productBox">
      <div class="product">
        <div class="productTitle">
          Beats Headphones
        </div>
        <div class="productInfo">
          <ul>
            <li><img src="Stuff/BeatsHeadphones.PNG" alt="Beats Headphones"
            id="beatsHeadphones"/></li>
            <li>
              Product Name: <br /><b>Beats Noise Cancelling Over-Ear Studio3
              Wireless Headphones The Skyline Collection</b>
              - Crystal Blue (MTU02LL/A)<br /><br />
              Vendor: Beats<br />
              Category: Electronics<br />
              Price: 349.99<br /><br /><br /><br />
              <button type="button" class="addToCart"
                onclick="window.location.href = 'beatsShoppingCart.html'">
                Add To Cart
              </button>
              <button type="button" class="backButton"
                onclick="alert('Error: Cannot go back')">
                Back
              </button><br /><br />
              Description:<br />
              - Pair and play with your Bluetooth device with 30ft
              Range.<br />
              - 12-Hour Rechargeable battery with fuel gauge. Soft over ear
              cushions for extended comfort and added noise
              isolation<br />
              - Soft ear Cups have an ergonomic bellow that creates a flexible
              custom fit, so you can keep your music all to
              yourself.<br />
              - Headphones come with a Remote Talk cable, a USB 2.0 charging
              cable, a hard shell carrying case, quick Start Guide

            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
