
<!DOCTYPE html>
<?php
	require_once '../admin_query/validate.php';
	require '../admin_query/name.php';
?>
<html lang = "en">
	<head>
	<title>Tinindag Festivals</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel="stylesheet"  type="text/css" href="../css/css_footer.css">
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
			<a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> <?php echo $name;?></a>
				</li>
				<li><a href = "index.php">Logout</a></li>	
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li class = ""><a href = "registered_user.php">Registered Accounts</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li ><a href = "reserve.php">Hotel Booking</a></li>
			<li class="active"><a href = "reserve_resort.php">Resort Booking</a></li>
			<li ><a href = "room.php">Booking</a></li>		
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Booking Information</div>
				<?php
					$query = $conn->query("SELECT * FROM `transactionresort` NATURAL JOIN `guest` NATURAL JOIN `resort` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "../admin_query/save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					
				<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['name']?>" class = "form-control" size = "30" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Email</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Resort Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['resort_name']?>" class = "form-control" size = "30" disabled = "disabled"/>
					</div>
					
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Reserved Date</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['checkin']?>" class = "form-control" size = "10" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Days</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "days" value = "<?php echo $fetch['days']?>" class = "form-control" disabled = "disabled"/>
					</div>
				
				
					<br style = "clear:both;"/>
					<br />
					
					
				</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Send Discard</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="send_email_discard.php">
				<div class="form-group">
					<label>Email:</label>
					<input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control" size = "40" disabled = "disabled"/>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required="required" value="Dicard Request Booking" disabled = "disabled"/>
				</div>

				<textarea class="form-control" name="message" required="required" rows="8" cols="50"><?php 
					echo "Dear Customer,\n\n";
					echo "We regret to inform you that your reservation has been successfully canceled. Below are the details of your canceled booking:\n\n";
					echo "Name: " . $fetch['name'] . "\n";
					echo "Hotel Name: " . $fetch['hotel_name'] . "\n";
					echo "Room Type: " . $fetch['room_type'] . "\n";
					echo "Reserved Date: " . $fetch['checkin'] . "\n";
					echo "Number of Days: " . $fetch['days'] . "\n";
					echo "Total Bill: " . $fetch['bill'] . "\n\n";
					echo "We understand that plans can change, and we hope to welcome you on another occasion. If you have any further questions or need assistance, please do not hesitate to contact us.\n\n";
					
					echo "Once again, we sincerely apologize for any inconvenience caused. Should you need to make another reservation in the future, we would be more than happy to assist you.\n\n";
					
					echo "Best regards,\n";
					echo "Your Hotel Name\n";
					echo "Hotel Address\n";
					echo "Hotel Contact Information\n";
				?>
				</textarea>

<br>
				<center><button name="send" href = "confirm_reserve.php?transaction_id=<?php echo $fetch['transaction_id']?>"class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
			</form>
			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>

	</div>
	
</body>	
</html>