<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Casa's Transient House</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel="stylesheet"  type="text/css" href="css/css_footer.css">
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Casa's Transient House Online Reservation</a>
			</div>
		</div>
	</nav>	
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li class = ""><a href = "home_user.php">Home</a></li>
			<li class = "active"><a href = "reservation.php">Reservation</a></li>
			<li><a href = "login_user.php">Logout</a></li>			
		</ul>	
	</div>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
                

        <div style="padding: 20px; text-align: center;">
            <div style="display: inline-block; width: 300px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px;">
                <img src="image/resort.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: black;">RESORT</h3>
                    <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    <button style="border: none; background-color: transparent; cursor: pointer; margin-left: 10px;">
                        <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px; margin-left: -15px;">
                    </button>
                    <div style="display: flex; justify-content: center; gap: 5px;">
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                        <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    </div>
                </div>
            </div>
            

        <div style="display: inline-block; width: 300px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px;">
            <img src="image/hotel.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 15px; text-align: center;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: black;">HOTEL</h3>
                <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                <button style="border: none; background-color: transparent; cursor: pointer; margin-left: 10px;">
                    <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px; margin-left: -15px;">
                </button>
                <div style="display: flex; justify-content: center; gap: 5px;">
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                </div>
            </div>
        </div>

        <div style="display: inline-block; width: 300px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px;">
            <img src="image/cuisine.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 15px; text-align: center;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; font-weight: bold; color: black;">CUISINE</h3>
                <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                <button style="border: none; background-color: transparent; cursor: pointer; margin-left: 10px;">
                    <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px; margin-left: -15px;">
                </button>
                <div style="display: flex; justify-content: center; gap: 5px;">
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                    <span style="font-size: 1.5rem; color: #FFD700;">★</span>
                </div>
            </div>

            
        </div>

				<?php
					require_once 'connection/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<h5><?php echo $fetch['descr']?></h5>
							<br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
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
                        <a href = "https://mail.google.com/mail/u/3/#inbox">casastransienthouse@gmail.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
</body>
	
</html>