<?php
  require "header.php"
?>
<?php
/*  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  } */
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
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
  <div class="login-box" style="position: absolute;top: 71.6%; height: 375px;">
    <img src="pix/Logo.PNG" alt="Mini Logo" class="loginLogo" />
    <h1>Login</h1>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter Username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter Password" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <br />
  	<p>
  		Not yet a member? <a href="createLogin.php" style="color: yellow;">Sign Up</a>
  	</p>
  </form>
</div>
</main>
