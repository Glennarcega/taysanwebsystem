
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

			<li class = "active"><a href = "">Home</a></li>
			<li><a href="reservation.php?id=<?php echo $id; ?>">Reservation</a></li>
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
				 <header class = "header" id = "header">
            
            <div class = "head-bottom flex">
        <h1 style="text-align: center; color: white; font-size: 4rem; margin-top: 30px;">Unlock the Secrets in Taysan,</h1>
        <h2 style="text-align: center; color: white;  font-size: 4rem; margin-top: 20px;">Travel Beyond Expectations</h2>
        <p style="text-align: center; color: white;  font-size: 1.5rem; margin-top: 20px;">we don't just plan trips, we craft unforgettable adventures.</p>
        
        <h2 style="text-align: center; color: white; font-size: 1rem; margin-top: 10px; padding: 10px 20px; border-radius: 40px; width: fit-content; box-sizing: border-box; border: 2px solid white; margin-left: auto; margin-right: auto;">
            <button style="border: none; background-color: transparent; cursor: pointer; margin-left: 10px;">
                <img src="image/location2.png" alt="Button Image" style="width: 30px; height: 30px; margin-left: -15px;">
            </button>Popular Place
        </h2>
        </div>
        </header>
        <!-- end of header -->
		  <!-- body content  -->
	
             
	
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