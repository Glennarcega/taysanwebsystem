<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tinindag Festivals</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  type="text/css" href="css/style_homepage.css">

   
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>Tinindag Festivals</span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>
            <div class = "head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>Welcome to Casa’s Transient House! Start the day with a life full of happiness and enjoyment. Visit our place here at Maricaban, Tingloy, Batangas to amaze by the beauty of beaches here. What are you waiting for? Reserve your room now!</p>
                <a href ="login_user.php" style="text-decoration:none;" button type = "button"  class = "head-btn">GET STARTED</button></a>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">Explore</a></li>
                
                <li><a href = "#location">About Us</a></li>
                <li><a href = "login_user.php">Account</a></li>
                <li><a href = "admin/index.php">Admin</a></li>
            </ul>
            <a href="register_user.php" button class="btn sign-up">sign up</button>
            <a href="login_user.php" button class = "btn log-in">log in</a>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->


       

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>Explore</h2>
            </div>
            <div class="services-container" style="display: inline-block;">
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
                <!-- end of single service -->
            </div>
        </section>

        

       


        <section class = "location" id = "location">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Abouit Us</h2>
                </div>
                <div class = "map-wrapper">
                    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d829.1201133727957!2d120.8377236!3d13.6699786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bdab3c8df32c41%3A0x6cc1713e24fb4b83!2sMapating%20Beach%20Resort!5e1!3m2!1sen!2sph!4v1666580260542!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
       
    </body>
    <script src= "js/script.js"></script>

</html>