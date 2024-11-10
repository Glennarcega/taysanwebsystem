<!DOCTYPE html>

<html lang = "en">
	<head>
		<title>Taysan Web System</title>
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

           <!-- syart booking content  -->
            <div style="padding: 20px; text-align: center;">

        
                    <?php 
					require_once 'connection/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style="height: 300px; width: 800px; display: flex; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
					onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
					onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
					<div style="flex: 1; max-width: 400px;">
						<img src="photo/<?php echo $fetch['photo']; ?>" alt="Room Image" style="height: 300px; width: 100%; object-fit: cover; transition: all 0.3s ease;" 
							onmouseover="this.style.transform='scale(1.1)';" 
							onmouseout="this.style.transform='scale(1)';">
					</div>
					<div style="flex: 1; margin-left: 10px; padding: 10px;">
						<h4 style="margin: 0; font-size: 1.5rem; font-weight: bold; color: black;">Hotel Name: <?php echo $fetch['hotel_name']; ?></h4>
						<h5 style="margin: 5px 0; font-size: 1.2rem; color: black;">Room Number: <?php echo $fetch['room_number']; ?></h5>
						<h5 style="margin: 5px 0; font-size: 1.2rem; color: black;">Room Type: <?php echo $fetch['room_type']; ?></h5>
						<h5 style="margin: 5px 0; font-size: 1.2rem; color: black;">Description: <?php echo $fetch['descr']; ?></h5>
						<h5 style="color: #00ff00; margin: 5px 0; font-size: 1.5rem;">Price: Php. <?php echo $fetch['price'] . ".00"; ?></h5>
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
							<input type="hidden" name="room_number" value="<?php echo $fetch['room_number']?>" />
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
						
													
							<div class="form-group">
								<label for="checkInDate">Check-in Date</label>
								<input type="date" class="form-control" id="checkInDate" name="date" required />
							</div>
							
							<?php 
								require_once 'connection/connect.php';
								$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error($conn));
								$fetch = $query->fetch_array();
							?>
							
							<div class="form-group">
								<label for="days">Days</label>
								<input type="number" min="0" max="99" id="days" name="days" class="form-control" required oninput="calculateTotal()" />
							</div>
							
							<div class="form-group">
								<label for="totalPayment" style="color: #007bff;">Total Payment</label> <!-- Change label color -->
								<input type="text" class="form-control" id="totalPayment" name="bill" readonly required style="color: #007bff;" /> <!-- Change input text color -->
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

            </div>
           <!-- end booking example -->
           
        </section>


        <!-- end of body content -->
        
        <!-- footer -->
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
                        <a href = "https://mail.google.com/mail/u/3/#inbox">casastransienthouse@gmail.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    

        

    
			</div>
		</div>
	</div>
	
	
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">

	</div>
	 
   
    </body>
    <script src= "js/script.js"></script>

</html>