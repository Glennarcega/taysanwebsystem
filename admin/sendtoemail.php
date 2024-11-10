
<!DOCTYPE html>
<?php
	require_once '../admin_query/validate.php';
	require '../admin_query/name.php';
?>
<html lang = "en">
	<head>
		<title>Casa's Transient House</title>
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
				<a class = "navbar-brand" >Casa's Transient House Online Reservation</a>
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
			<li class="active"><a href = "reserve.php">Hotel Booking</a></li>
			<li><a href = "reserve_resort.php">Resort Booking</a></li>
			<li ><a href = "room.php">Booking</a></li>		
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Booking Information</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
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
						<label>email</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Hotel Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['hotel_name']?>" class = "form-control" size = "30" disabled = "disabled"/>
					</div>
					
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Room Type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "10" disabled = "disabled"/>
						
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
		<h3 class="text-primary">Send Confirmation</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
			<form method="POST" action="send_email.php">
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email" value = "<?php echo $fetch['email']?>"required="required"/>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required="required" value="Accept Request Booking"/>
				</div>
				<div class="form-group">
				<label>Message</label>
				<textarea class="form-control" name="message" required="required" rows="7" cols="50"><?php 
					echo "Dear Customer,\n\n";
					echo "Thank you for choosing our services. Below are the details of your reservation:\n\n";
					echo "Name: " . $fetch['name'] . "\n";
					echo "Hotel Name: " . $fetch['hotel_name'] . "\n";
					echo "Room Type: " . $fetch['room_type'] . "\n";
					echo "Reserved Date: " . $fetch['checkin'] . "\n";
					echo "Number of Days: " . $fetch['days'] . "\n";
					echo "Total Bill: " . $fetch['bill'] . "\n\n";
					echo "We look forward to your stay with us. Should you need further assistance, please don't hesitate to contact us.\n\n";
					echo "Best regards,\n";
					echo "Your Hotel Name\n";
					echo "Hotel Address\n";
					echo "Hotel Contact Information\n";
				?>
				</textarea>


			</div>



				<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
			</form>
			<br />
	
		</div>
	</div>

	</div>
	<br />
	<br />
	<footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
					<p>This web-based reservation system that makes it easier for customers to pair up with Casa's Transient House.
						They will capable of choosing rooms that fit within their budget.They will aslo discover wether there are any more rooms available or not.
					</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                             Maricaban, Tingloy, Batagas
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +1234 567 89
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            casastransienthouse@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    
    
    
</body>	
</html>