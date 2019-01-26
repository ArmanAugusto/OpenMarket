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
  <div>
    <div class="categoryContainer">
      <div class="categories">
        <div class="categoriesTitle">
          Our Products
        </div>
      <ul>
        <li>
          <figure>
            <a href="beatsHeadphones.php">
              <img src="Stuff/BeatsHeadphones.PNG" alt="Beats Headphones"
                id="productImg1">
            </a>
          </figure>
          <span id=productText1>
            Product Name: Beats Noise Cancelling Over-Ear Studio3 Wireless
            Headphones The Skyline Collection
            - Crystal Blue (MTU02LL/A)<br />
            Vendor: Beats
            Category: Electronics
            Price: 349.99<br />
            Description:
            -Pair and play with your Bluetooth device with 30ft Range.<br />
            -12-Hour Rechargeable battery with fuel gauge. Soft over ear
            cushions for extended comfort and added noise isolation <br />
            -Soft ear Cups have an ergonomic bellow that creates a flexible
            custom fit, so you can keep your music all to yourself. <br />
            -Headphones come with a Remote Talk cable, a USB 2.0 charging
            cable, a hard shell carrying case, quick Start Guide
          </span>
        </li>
      </ul>
      <ul>
        <li>
          <figure>
            <a href="canonCamera.php">
              <img src="Stuff/CanonCamera.png" alt="Canon Camera"
                id="productImg2">
            </a>
          </figure>
          <span id=productText2>
            Product Name: Canon EOS Rebel SL2 DSLR Camera EF-S 18-55mm STM
            Lens
            - WiFi Enabled<br />
            Vendor: Canon
            Category: Electronics
            Price: 649.00
            Description:
            -24.2 Megapixel CMOS (APS-C) Sensor<br />
            -Fast & Accurate Dual Pixel CMOS AF with Phase-detection<br />
            -Vary-angle Touch Screen, 3.0-inch LCD<br />
            -Built-in Wi-Fi, NFC and Bluetooth Technology<br />
            -Full HD 60p & External Microphone Input<br />
          </span>
        </li>
      </ul>
      <ul>
        <li>
          <figure>
            <a href="RedDead2.php">
              <img src="Stuff/RedDead2Game.PNG" alt="Red Dead Redemption 2"
                id="productImg3">
            </a>
          </figure>
          <span id=productText3>
            Product Name: Red Dead Redemption 2 - Xbox One<br />
            Vendor: Rockstar
            Category: Video Games
            Price: 59.99
            Description:
            -Platform: Xbox One<br />
            -Developed by the creators of Grand Theft Auto V and Red Dead
            Redemption, Red Dead Redemption 2 is an epic tale of life in
            America's unforgiving heartland. The game's vast and atmospheric
            world will also provide the foundation for a brand new online
            multiplayer experience.
          </span>
        </li>
      </ul>
    </div>
    </div>
  </div>
</main>
