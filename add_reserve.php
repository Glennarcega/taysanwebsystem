<!DOCTYPE html>

<html lang = "en">
	<head>
		<title>Casa's Transient House</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Casa's Transient House Online Reservation</a>
			</div>
		</div>
	</nav>	
	
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<br />
				<?php 
					require_once 'connection/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style="height: 300px; width: 800px; display: flex; align-items: center; justify-content: space-between;">
				<div style="height: 300px; width: 800px; display: flex; align-items: center; justify-content: space-between;">
				<div style="flex: 1; max-width: 400px;">
					<img src="photo/<?php echo $fetch['photo']?>" style="height: 300px; width: 100%; object-fit: cover;">
				</div>
				<div style="flex: 1; margin-left: 10px;">
					<h4 style="margin: 0;">Hotel Name: <?php echo $fetch['hotel_name']?></h4>
					<h5 style="margin: 5px 0;">Room Number: <?php echo $fetch['room_number']?></h5>
					<h5 style="margin: 5px 0;">Room Type: <?php echo $fetch['room_type']?></h5>
					<h5 style="margin: 5px 0;">Description: <?php echo $fetch['descr']?></h5>
					<h5 style="color: #00ff00; margin: 5px 0;">Price: Php. <?php echo $fetch['price'].".00";?></h5>
				</div>
			</div>

				<br style = "clear:both;" />
				<div class = "well col-md-4">
						
						<?php
						// Retrieve user_id from the URL if it exists
						$user_id = isset($_GET['id']) ? $_GET['id'] : null;
						?>
					<form method = "POST" enctype = "multipart/form-data">
							<?php 
							require_once 'connection/connect.php';
							$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
							$fetch = $query->fetch_array();
						?>
						<div class = "form-group">
							<!-- <label>address</label> -->
							<input type = "hidden" class = "form-control"  value="<?php echo $fetch['room_number']?>" name = "room_number" required = "required" />
						</div>
					<input type="hidden" name="hotel_name" value="<?php echo $fetch['hotel_name']?>" />
					<input type="hidden" name="id" value="<?php echo htmlspecialchars($user_id); ?>" />
					<div class = "form-group">
						<?php 
								require_once 'connection/connect.php';
								$query = $conn->query("SELECT * FROM `users` WHERE `id` = '$_REQUEST[id]'") or die(mysql_error());
								$fetch = $query->fetch_array();
							?>
							<!-- <label>Name</label> -->
							<input type = "hidden" class = "form-control" value="<?php echo $fetch['name']?>"  name = "name" required = "required" />
						</div>
						<div class = "form-group">
							<!-- <label>address</label> -->
							<input type = "hidden" class = "form-control"  value="<?php echo $fetch['address']?>" name = "address" required = "required" />
						</div>
					
						<div class = "form-group">
							<!-- <label>contact number</label> -->
							<input type = "hidden" class = "form-control" value="<?php echo $fetch['contactno']?>" name = "contactno" required = "required" />
						</div>
						<div class="form-group">
							<!-- <label>Email</label> -->
							<input type="hidden" class = "form-control" value="<?php echo $fetch['email']?>"  name="email" required = "required">
							</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<?php 
							require_once 'connection/connect.php';
							$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
							$fetch = $query->fetch_array();
						?>
						
						<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Days</label>
						<input type="number" min="0" max="99" id="days" name="days" class="form-control" required="required" oninput="calculateTotal()"/>
					</div>
						<br />
						<div class="form-group">
						<label>Total payment</label>
						<input type="text" class="form-control" id="totalPayment" name="bill" readonly required="required" />
					</div>

						<script>
						// JavaScript function to calculate total payment
						function calculateTotal() {
							// Get room price and remove "Php. " prefix
							const roomPrice = parseFloat("<?php echo $fetch['price']; ?>");
							const days = document.getElementById("days").value;

							// Calculate total price and update totalPayment field
							const totalPayment = roomPrice * days;

							// Display the total payment, formatted as currency
							document.getElementById("totalPayment").value = "Php. " + totalPayment.toFixed(2);
						}
						</script>
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'user_query/add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>
</body>
</html>