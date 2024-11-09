<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Casa's Transient House</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  type="text/css" href="css/style_homepage.css">
        
   
		
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>Casa's Transient House</span>
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
                <li><a href = "#services">services</a></li>
                
                <li><a href = "#location">location</a></li>
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
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Casa’s Transient House offers foods and drinks services to any customers. Foods are part of a customers reservation package. Casa’s Transient house have different kind of menu's that you can choose. Guest and Customers can also cook their food if they're wanted to. Food services in this transient house is better and taste good at the same time.</p>
                        
                        
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Any customers can enjoy the sea breeze and fresh air that will make themselves comfortable and relax. Customers can also do some snorkeling and diving as part of their vacation. Guest will fill their heart and lifes with enjoyment and happiness while visiting this transient house. It is refreshing, enjoying, and most of all beach is a very good place to relax.</p>
                        
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>
Casa’s Transient House owner, maintain the cleanliness of the house. They are keeping every rooms comfortable for guest and customers. Person in charge of cleaning check every part of the rooms and taking care of dirts and garbage after and before the guest arrives.</p>
                        
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>Guest rooms are secured with double locks that prevents any malicious person to enter. Customers baggage and other supplies they brought are safe. Person in charge is not allowed to enter any guest room when there are visitors and customers are check in. Casa’s Transient assure the safety of every customers and guest. It is the most important rules of the Transient House to satisfy every customers needs and respect their wants while visiting the place.</p>
                       
                    
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        

       


        <section class = "location" id = "location">
            <div class = "sec-width">
                <div class = "title">
                    <h2>Location</h2>
                </div>
                <div class = "map-wrapper">
                    <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d829.1201133727957!2d120.8377236!3d13.6699786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bdab3c8df32c41%3A0x6cc1713e24fb4b83!2sMapating%20Beach%20Resort!5e1!3m2!1sen!2sph!4v1666580260542!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
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
    
    </body>
    <script src= "js/script.js"></script>

</html>