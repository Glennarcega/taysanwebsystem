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
           <!-- start booking content  -->
            <div style="padding: 20px; text-align: center;">
            <a href="reservation_resort.php?id=<?php echo $id; ?>" style="text-decoration: none;">
                <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;"  
                    onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                    <img src="image/resort.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                        onmouseover="this.style.transform='scale(1.1)';" 
                        onmouseout="this.style.transform='scale(1)';">
                    <div style="padding: 15px; text-align: center;">
                        <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">RESORT</h3>
                        <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>

                        <button style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                                onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                            <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
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
            </a>


            <a href="reservation_hotel.php?id=<?php echo $id; ?>" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/hotel.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">HOTEL</h3>
                    <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
                    <button onclick="window.location.href='reservation_hotel.php?id=<?php echo $id; ?>'"    style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                        <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
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
            </a>

            <a href="view_attraction.php?id=<?php echo $id; ?>" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/attraction.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">ATTRACTION</h3>
                    <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
                    <button onclick="window.location.href='view_attraction.php?id=<?php echo $id; ?>'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                        <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
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
            </a>

            <a href="view_cuisine.php?id=<?php echo $id; ?>" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/cuisine.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 2.2rem; margin-bottom: 10px; font-weight: bold; color: black;">CUISINE</h3>
                    <p style="font-size: 1.5rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
                    <button onclick="window.location.href='view_cuisine.php?id=<?php echo $id; ?>'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#ddd'; this.style.transform='scale(1.1)';" 
                            onmouseout="this.style.backgroundColor='#f0f0f0'; this.style.transform='scale(1)';">
                        <img src="image/next.png" alt="Button Image" style="width: 30px; height: 30px;">
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
</a>

        </div>
        <!-- end booking example -->
           
        </section>


        <!-- end of body content -->
       
			</div>
		</div>
</div>
   
    </body>
    <script src= "js/script.js"></script>

</html>