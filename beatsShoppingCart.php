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
          Shopping Cart
        </div>
      <ul>
        <li>
          <figure>
            <a href="beatsHeadphones.html">
              <img src="Stuff/BeatsHeadphones.PNG" alt="Beats Headphones"
                id="productImg1">
            </a>
          </figure>
          <span id=productText1>
            <b style="font-size: 18px">Product Name: Beats Noise Cancelling Over-Ear Studio3 Wireless
            Headphones The Skyline Collection
            - Crystal Blue (MTU02LL/A)</b><br />
            Vendor: Beats<br />
            Category: Electronics<br />
            <b style="font-size: 20px">Price: 349.99</b><br />
          </span>
        </li>
      </ul>
    </div>
    </div>
  </div>
</main>
