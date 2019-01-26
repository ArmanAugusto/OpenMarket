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
  <div class="createLogin-box" style="height: 540px; top: 85%">
    <img src="pix/Logo.PNG" alt="Mini Logo" class="loginLogo" />
    <h1>Create Login</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>"
      placeholder="Create a Username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"
      style="border: none;border-bottom: 1px solid #fff;background: transparent;
      outline: none;height: 40px;color: #fff;font-size: 16px;"
      placeholder="Enter E-mail Address">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Create a Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Re-enter Password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
    <br />
  	<p>
  		Already a member? <a href="login.php" style="color: yellow;">Sign in</a>
  	</p>
  </form>
</div>
</main>
