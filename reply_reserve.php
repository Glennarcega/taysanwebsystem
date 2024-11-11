<!DOCTYPE html>
<html lang = "en">
	<head>
    <title>Tinindag Festivals</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
            <a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
		</div>
	</nav>	

	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Please wait for the confirmation in your email account</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>
					<br />
                    <?php
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            ?>
					<center><a href = "reservation.php?id=<?php echo $id; ?>" class = "btn btn-success"><i class = "glphyicon glyphicon-check"></i> Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script type = "text/javascript" >  
  history.pushState(null, document.title, location.href);
    history.back();
    history.forward();
    window.onpopstate = function () {
        history.go(1);
    };
    </script>

</html>