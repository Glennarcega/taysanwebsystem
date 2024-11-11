<!DOCTYPE html>
<script type = "text/javascript" >  
  history.pushState(null, document.title, location.href);
    history.back();
    history.forward();
    window.onpopstate = function () {
        history.go(1);
    };
    </script>
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
  	<h2>User Login</h2>
  </div>
	 
  <form method="post" action="login_user.php">
  <?php include('user_query/query_login.php') ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" size="50">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"  size="50">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
		
  	</div>
  	<p>
  		Not yet a member? <a href="register_user.php">Sign up</a>
  	</p>
  </form>
  <br />
	
</body>
</html>