<!DOCTYPE html>

<html lang = "en">
	<head>
		<title>Taysan Wen System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel="stylesheet"  type="text/css" href="css/home_user.css">
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
			
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
        <?php
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            ?>

            <li><a href="home_user.php?id=<?php echo $id; ?>">Home</a></li>
			<li class = "active"><a href="reservation.php?id=<?php echo $id; ?>">Reservation</a></li>
            <li><a href="records.php?id=<?php echo $id; ?>">Hotel Booking</a></li>
            <li><a href="records_resort.php?id=<?php echo $id; ?>">Resort Booking</a></li>
			<li><a href = "login_user.php">Logout</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				 <!-- header -->
				
            
            <div class = "head-bottom flex">
           

            </div>
        </header>
        <!-- end of header -->
		  <!-- body content  -->
		  <section class = "services sec-width" id = "services">
		  <div class="title">
			<h4 style="color: black;">Make Reservation</h4>
		</div>


				<?php 
					require_once 'connection/connect.php';
					$query = $conn->query("SELECT * FROM `resort` WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
				<div style="height: 300px; width: 800px; display: flex; align-items: center; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; overflow: hidden; transition: all 0.3s ease;"
				onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.03)';"
				onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
				
				<div style="flex: 1; max-width: 400px; overflow: hidden;">
					<img src="photo/<?php echo $fetch['photo']?>" alt="Resort Image" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;"
						onmouseover="this.style.transform='scale(1.05)';"
						onmouseout="this.style.transform='scale(1)';">
				</div>
				
				<div style="flex: 1; padding: 10px; margin-left: 10px;">
				<h3 style="margin: 0; font-size: 1.5rem; color: #333;">
					Resort Name: <?php echo htmlspecialchars($fetch['resort_name']); ?>
				</h3>
				<h5 style="margin: 5px 0; color: #666;">
					Description: <?php echo htmlspecialchars($fetch['descr']); ?>
				</h5>
				<h3 style="color: #00ff00; font-size: 1.5rem;">
					Price: Php. <?php echo number_format($fetch['price'], 2, '.', ','); ?>
				</h3>
			</div>

				
				</div>
			
				<br style = "clear:both;" />
				<div class = "well col-md-4">
						
						<?php
						// Retrieve user_id from the URL if it exists
						$user_id = isset($_GET['id']) ? $_GET['id'] : null;
						?>
					<form method="POST" enctype="multipart/form-data" style="float: right;">
    <!-- Form content here -->

					<?php 
					require_once 'connection/connect.php';
					$query = $conn->query("SELECT * FROM `resort` WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>

					<input type="hidden" name="resort_name" value="<?php echo $fetch['resort_name']?>" />
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
						
							<div class="form-group">
								<label for="date" class="col-form-label">Date</label>
								<input type="date" class="form-control" name="date" id="date" required="required" />
							</div>

							<?php 
								require_once 'connection/connect.php';
								$query = $conn->query("SELECT * FROM `resort` WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysqli_error($conn));
								$fetch = $query->fetch_array();
							?>

							<div class="form-group">
								<label for="days" class="col-form-label">Days</label>
								<input type="number" min="0" max="99" id="days" name="days" class="form-control" required="required" oninput="calculateTotal()" />
							</div>
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
				<?php require_once 'user_query/add_query_reserve_resort.php'?>
			</div>
		</div>
	</div>
	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>
</body>
</html>