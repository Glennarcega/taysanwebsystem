

<!DOCTYPE html>
<?php
require_once 'connection/connect.php';
?>

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
			<li><a href="reservation.php?id=<?php echo $id; ?>">Reservation</a></li>
            <li><a href="records.php?id=<?php echo $id; ?>">Hotel Booking</a></li>
            <li class = "active"><a href="records_resort.php?id=<?php echo $id; ?>">Resort Booking</a></li>
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

			<?php
            
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_c = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Reserved'") or die(mysqli_error());
				$f_c = $q_c->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
				$q_cw = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check Out'") or die(mysqli_error());
				$f_cw = $q_cw->fetch_array();
			?>
			 <div class="title">
                    <h4 style="color: black;">Records</h4>
                </div>
 
                <table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Resort Name</th>
		
							<th>Reserved Date</th>
							<th>Status</th>
                            <th>Bill</th>


						</tr>
						
					</thead>
					<tbody>
                    <?php
// Retrieve the 'id' parameter from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Ensure the ID is an integer


// Query to get records where the 'id' matches and status is 'Pending'
$query = $conn->query(
    "SELECT * FROM `transactionresort` 
    NATURAL JOIN `guest` 
    NATURAL JOIN `resort` 
    WHERE `status` = 'Pending' AND `id` = $id"
) or die(mysqli_error($conn));

// Check if any rows were returned
if ($query->num_rows > 0) {
    while ($fetch = $query->fetch_array()) {
        ?>
        <tr>
            <td><?php echo $fetch['resort_name']; ?></td>
            <td><strong>
                <?php 
                if ($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))) {
                    echo "<label style='color:#0000ff;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
                } else {
                    echo "<label style='color:#0000FF;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
                }
                ?>
            </strong></td>
            <td><?php echo $fetch['status']; ?></td>
            <td><?php echo $fetch['bill']; ?></td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}
?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
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
<script src = "/js/jquery.dataTables.js"></script>
<script src = "/js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
    <script src= "js/script.js"></script>

</html>


