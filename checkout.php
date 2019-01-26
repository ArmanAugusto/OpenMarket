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
      <div class="checkoutBox">
        <div class="checkoutTitle">
          <h1>Billing and Delivery</h1>
        </div>
        <div class="cardInfo">
          <h2>Card Information</h2>
          <form>
            <p>Name on the Card</p>
            <input type="text" name="ccName"
              placeholder="Name on the Card" />
            <p>Last Name</p>
            <input type="text" name="ccNumber"
              placeholder="1111-2222-3333-4444" />
            <p>Expiration Date</p>
            <input type="text" name="expDate"
              placeholder="11/11/2018" />
            <p>CVV</p>
            <input type="text" name="cvv"
              placeholder="11/11/2018" />
          </form>
        <div class="billingAddress">
          <h2>Billing Address</h2>
          <form>
            <p>Full Name</p>
            <input type="text" name="fullName"
              placeholder="Steve Q. Bert" />
            <p>Email</p>
            <input type="text" name="email"
              placeholder="Steve@example.com" />
            <p>Address</p>
            <input type="text" name="address"
              placeholder="555 W. Open Street" />
            <p>City</p>
            <input type="text" name="city"
              placeholder="San Francisco" />
            <p>State</p>
            <input type="text" name="state"
              placeholder="CA" />
            <p>Zip Code</p>
            <input type="text" name="zipCode"
              placeholder="94123" />
          </form>
        </div>
      </div>
      <div class="sameAddress">
        <br />
        <input type="checkbox" checked="checked" name="sameAddress" />
        Shipping address same as billing<br /><br />
      </div>
        <div id="checkoutButtons">
          <button type="button" class="submitOrderButton"
            onclick="alert('TEST: Will submit order')">
            Confirm
          </button>
          <button type="button" class="continueShopping"
            onclick="alert('Error: Cannot go back')">
            Edit Order
          </button>
        </div>
      </div>
    </main>
