<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Tinindag Festivals</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
    
</head>
<body>

<div class="header">
	<h2>Welcome to Taysan Web System</h2>
</div>
<div class="content">
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
    <h2 style="text-align: center;">Welcome <strong></h2>
    <br>
    <h1 style="text-align: center;"><?php echo $_SESSION['username']; ?></h1>

    <?php
        // Get the ID from the URL
        $id = isset($_GET['id']) ? $_GET['id'] : ''; // Check if ID exists in the URL
    ?>
    <p> 
    <div style="text-align: center;">
    <a href="home_user.php?id=<?php echo $id; ?>" style="color: blue; text-decoration: none;">Continue</a>
</div>
    </p>
<?php endif ?>

</div>

</body>
</html>