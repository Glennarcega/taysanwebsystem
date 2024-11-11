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
                $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
                while($fetch = $query->fetch_array()){
                ?>
                    <a href="add_reserve.php?room_id=<?php echo $fetch['room_id']; ?>&id=<?php echo $id; ?>" style="text-decoration: none;">
                    <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                        onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                        onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                        <img src="photo/<?php echo $fetch['photo']; ?>" alt="Room Image" style="width: 100%; height: 150px; object-fit: cover; transition: all 0.3s ease;" 
                            onmouseover="this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.transform='scale(1)';">
                        <div style="padding: 10px; text-align: center;">
                        <h3 style="font-size: 2.2rem; margin-bottom: 8px; font-weight: 600; color: #333; line-height: 1.4;">
                            <?php echo $fetch['hotel_name']; ?>
                                </h3>
                                <h5 style="font-size: 1.4rem; margin-bottom: 2px; font-weight: 500; color: #444; line-height: 1.3;">
                                    Location: <?php echo $fetch['location']; ?>
                                </h5>
                                <h5 style="font-size: 1.4rem; margin-bottom: 2px; font-weight: 500; color: #444; line-height: 1.3;">
                                    Room Number: <?php echo $fetch['room_number']; ?>
                                </h5>
                                <h4 style="font-size: 2rem; color: #007bff; font-weight: bold; margin-bottom: 1px;">
                                    <?php echo "Price: Php. ".$fetch['price'].".00"; ?>
                                </h4>
                                <h4 style="font-size: 1.6rem; color: #555; margin-bottom: 2px; line-height: 1.5;">
                                    <?php echo $fetch['descr']; ?>
                                </h4>

                            <button onclick="window.location.href = 'add_reserve.php?room_id=<?php echo $fetch['room_id']; ?>&id=<?php echo $id; ?>';
                                    " style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
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
       
			</div>
		</div>
	</div>
	
	
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">

	</div>
	 
   
    </body>
    <script src= "js/script.js"></script>

</html>