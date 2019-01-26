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
    <div class="missionBox">
      <div class="missionStatement">
        <h1>Our Mission</h1>
        <p>
          <b>Open Market aims to bring the highest quality products at the
          greatest prices for our customers. <br /><br />At Open Market our
          number one priority is the experience of our customers and the
          integrity of our partners. <br /><br />Open Market's goal is to
          connect many persons across the globe and provide an easy and
          accessible shopping experience.</b>
        </p>
      </div>
    </div>
  </main>
