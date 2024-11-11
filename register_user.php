<?php include('user_query/query_login.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Tinindag Festivals</title>
  <link rel="stylesheet" type="text/css" href="css/style_login.css">
  <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
</head>
<body>
<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
            <a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
            <ul class = "nav navbar-nav pull-right ">
				<li><a href = "index.php">Home</a></li>	
			</ul>
			
		</div>
	</nav>
  
    <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register_user.php">
  	<?php include('user_query/errors.php'); ?>
      <div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" size="50" required = "required" />
  	</div>

      <div class="input-group">
      <label>Address</label>
		<input type = "text" name = "address" size="50" required = "required" />
		</div>
  	</div>

      <div class="input-group">
      <label>Contact No</label>
		<input type = "text" name = "contactno" size="50" required = "required" />
	 </div>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" size="50" required = "required" />
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" size="50" required = "required" />
  	</div>


  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" size="50" required = "required" />
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" size="50" required = "required" />
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
		
  	</div>
  	<p>
  		Already a member? <a href="login_user.php">Sign in</a>
  	</p>
  </form>
  <br />
	
</body>
</html>