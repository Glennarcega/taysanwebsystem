<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tinindag Festivals</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  type="text/css" href="css/style_homepage.css">

<style>
   header {
    position: relative;
    background-image: url('image/bg.jpg');
    color: white; /* Ensure text is readable */
}

header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Transparent black overlay */
    z-index: 1; /* Place the overlay above the background image */
}

header > * {
    position: relative;
    z-index: 2; /* Ensure content is above the overlay */
}

}

    </style>

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
            
            <div style="text-align: center; padding-top: 50px;">
    <h1 style="font-size: 4rem; color: white; text-align: center; margin-top: 30px; text-shadow: 7px 7px 7px rgba(5, 5, 5, 5.8), 0px 0px 8px pink;">
        Unlock the Secrets in Taysan,
    </h1>
    <h2 style="font-size: 3rem; color: white; text-align: center; margin-top: 20px; text-shadow: 7px 7px 9px rgba(0, 0, 0, 0.8), 0px 0px 8px pink;">
        Travel Beyond Expectations
    </h2>
    <p style="font-size: 1.5rem; color: white; text-align: center; margin-top: 20px; line-height: 1.6; text-shadow: 7px 7px 9px rgba(0, 0, 0, 0.8), 0px 0px 6px pink;">
        We don't just plan trips, we craft unforgettable adventures.
    </p>
</div>


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
            <a href="#" class="popupLink" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/resort.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: bold; color: black;">RESORT</h3>
                    <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>

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

        <a href="#" class="popupLink" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/hotel.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: bold; color: black;">HOTEL</h3>
                    <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
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


            <a href="#" class="popupLink" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/attraction.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: bold; color: black;">ATTRACTION</h3>
                    <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
                    <button onclick="window.location.href='#'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
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

            <a href="#" class="popupLink" style="text-decoration: none;">
            <div style="display: inline-block; width: 250px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
                onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                <img src="image/cuisine.jpg" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover; transition: all 0.3s ease;" 
                    onmouseover="this.style.transform='scale(1.1)';" 
                    onmouseout="this.style.transform='scale(1)';">
                <div style="padding: 15px; text-align: center;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; font-weight: bold; color: black;">CUISINE</h3>
                    <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">This is a short description of the product. It gives users an overview of the product features and benefits.</p>
                    
                    <button onclick="window.location.href='#'" style="border: none; background-color: #f0f0f0; padding: 10px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"
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
<script>
    // Get all the links with the class 'popupLink'
    const links = document.querySelectorAll('.popupLink');

    // Add click event listener to each link
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the link (e.g., page refresh)

            // Show the popup message and navigate to register_user.php after the alert
            alert("Please Create Account to booked and explore!");

            // Redirect to register_user.php
            window.location.href = "register_user.php"; // This will navigate to the register_user.php page
        });
    });
</script>

        </div>
                <!-- end of single service -->
            </div>
        </section>

        

       


        <section class = "location" id = "location">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Abouit Us</h2>
                </div>
                
                <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 20px; max-width: 1200px; margin: auto; padding: 20px;">
                <div style="display: inline-block; width: 100%; max-width: 500px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
    onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
    onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">

    <!-- Image Section -->
    <img src="image/aboutus.jpg" alt="Landscape of Taysan, Batangas" style="width: 100%; height: 250px; object-fit: cover; transition: all 0.3s ease;" 
        onmouseover="this.style.transform='scale(1.1)';" 
        onmouseout="this.style.transform='scale(1)';">
    
    <!-- Text Section -->
    <div style="padding: 20px; text-align: center;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px; font-weight: bold; color: black;">About Taysan, Batangas</h3>
        <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">Here are some interesting facts about Taysan, Batangas:</p>
        <ul style="list-style-type: none; padding: 0; text-align: left; font-family: 'Lora', serif;">
            <li style="font-size: 1rem; margin-bottom: 10px; line-height: 1.6;">
                <strong>Name Origin:</strong> The name "Taysan" may come from the Tagalog word <em>Atisan</em>, meaning "a place where atis abound near Lobo."
            </li>
            <li style="font-size: 1rem; margin-bottom: 10px; line-height: 1.6;">
                Alternatively, it may derive from <em>Tiis</em>, meaning "to bear with fortitude." Folklore says that early natives found the area difficult to access, so a traveler once shouted "Tiisan!" ("Endure!") on the way to the area.
            </li>
        </ul>

    </div>
</div>

<div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 20px; max-width: 1200px; margin: auto; padding: 20px;">
                <div style="display: inline-block; width: 100%; max-width: 500px; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff; margin: 10px; transition: all 0.3s ease;" 
    onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
    onmouseout="this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">

    <!-- Image Section -->
    <img src="image/barangay.jpg" alt="Landscape of Taysan, Batangas" style="width: 100%; height: 250px; object-fit: cover; transition: all 0.3s ease;" 
        onmouseover="this.style.transform='scale(1.1)';" 
        onmouseout="this.style.transform='scale(1)';">
    
    <!-- Text Section -->
    <div style="padding: 20px; text-align: center;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px; font-weight: bold; color: black;">Barangays</h3>
        <ul style="list-style-type: none; padding: 0; text-align: left; font-family: 'Lora', serif;">
            
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 1px; max-width: 500px; padding: 20px;">
        
        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Bilogo</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Bukal</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Dagatan</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Guinhawa</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Laurel</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Mabayabas</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Mapulo</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Pag-Asa</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Panghayaan</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">San Juan</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">San Isidro</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">San Rafael</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Santo Niño</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Talaan</p>
        </div>

        <div style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1); padding: 10px; text-align: center; transition: all 0.3s ease;"
             onmouseover="this.style.boxShadow='0 6px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';"
             onmouseout="this.style.boxShadow='0 3px 3px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
            <p style="font-size: 1rem; font-weight: bold; color: #333; margin: 0;">Tayuman</p>
        </div>

    </div>
            
        </ul>

    </div>
</div>

    
    <!-- Text Section -->
    
</div>

            </div>
        </section>
        <!-- end of body content -->
        
       
    </body>
    <script src= "js/script.js"></script>

</html>