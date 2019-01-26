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
  	header("location: index.php");
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
          Canon Camera
        </div>
        <div class="productInfo">
          <ul>
            <li><img src="Stuff/CanonCamera.png" alt="Canon Camera"
            id="canonCamera"/></li>
            <li>
              Product Name:<br />
              <b>Canon EOS Rebel SL2 DSLR Camera EF-S 18-55mm STM
              Lens</b>
              - WiFi Enabled<br /><br />
              Vendor: Canon<br />
              Category: Electronics<br />
              Price: 649.00<br /><br /><br /><br /><br />
              <button type="button" class="addToCart"
                onclick="window.location.href = 'beatsCanonShoppingCart.html'">
                Add To Cart
              </button>
              <button type="button" class="backButton"
                onclick="alert('Error: Cannot go back')">
                Back
              </button><br /><br />
              Description:<br /><br />
              - 24.2 Megapixel CMOS (APS-C) Sensor<br />
              - Fast & Accurate Dual Pixel CMOS AF with Phase-detection<br />
              - Vary-angle Touch Screen, 3.0-inch LCD<br />
              - Built-in Wi-Fi, NFC and Bluetooth Technology<br />
              - Full HD 60p & External Microphone Input
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
