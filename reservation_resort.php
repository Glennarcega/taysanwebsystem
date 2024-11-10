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
			<li><a href = "home_user.php?id=<?php echo $id; ?>">Home</a></li>
			<li class = "active"><a href = "reservation.php?id=<?php echo $id; ?>">Reservation</a></li>
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
                $query = $conn->query("SELECT * FROM `resort` ORDER BY `price` ASC") or die(mysql_error());
                while($fetch = $query->fetch_array()){
                ?>
                    <a href="add_reserve_resort.php?resort_id=<?php echo $fetch['resort_id']; ?>&id=<?php echo $id; ?>" style="text-decoration: none;">
                    <div style="display: inline-block; width: 300px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                        onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                        onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                        <img src="photo/<?php echo $fetch['photo']; ?>" alt="Room Image" style="width: 100%; height: 150px; object-fit: cover; transition: all 0.3s ease;" 
                            onmouseover="this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.transform='scale(1)';">
                        <div style="padding: 10px; text-align: center;">
                            <h3 style="font-size: 2.2rem; margin-bottom: 5px; font-weight: bold; color: black;"><?php echo $fetch['resort_name']; ?></h3>
                            <h4 style="font-size: 2rem; color: #0000ff;"><?php echo "Price: Php. ".$fetch['price'].".00"; ?></h4>
                            <h4 style="font-size: 2rem; color: #555; margin-bottom: 15px;"><?php echo $fetch['descr']; ?></h4>
<button onclick="window.location.href = 'add_reserve_resort.php?resort_id=<?php echo $fetch['resort_id']; ?>&id=<?php echo $id; ?>';
" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                            onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                                <img src="image/next.png" alt="Reserve Button" style="width: 20px; height: 20px;">
                            </button>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>

            

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