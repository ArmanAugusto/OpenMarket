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
          Beats Headphones
        </div>
        <div class="productInfo">
          <ul>
            <li><img src="Stuff/RedDead2Game.PNG" alt="Red Dead Redemption 2"
            id="RedDeadRedemption2"/></li>
            <li>
              Product Name:<br /><b>Red Dead Redemption 2</b>
              - Xbox One<br /><br />
              Vendor: Rockstar<br />
              Category: Video Games<br />
              Price: 59.99<br /><br /><br /><br /><br />
              <button type="button" class="addToCart"
                onclick="alert('TEST: Added to cart')">
                Add To Cart
              </button>
              <button type="button" class="backButton"
                onclick="alert('Error: Cannot go back')">
                Back
              </button><br /><br />
              Description:<br /><br />
              - Platform: Xbox One<br /><br />
              - Developed by the creators of Grand Theft Auto V and
              Red Dead Redemption, Red Dead Redemption 2 is an epic tale of life in
              America's unforgiving heartland. The game's vast and atmospheric
              world will also provide the foundation for a brand new online
              multiplayer experience.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
