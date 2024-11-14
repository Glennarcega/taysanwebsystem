
<!DOCTYPE html>
<?php
require_once '../admin_query/validate.php';
require '../admin_query/name.php';

// Assuming $conn is your database connection
$transactionId = isset($_REQUEST['transaction_id']) ? $_REQUEST['transaction_id'] : null;

// Sanitize and validate the transaction_id
if ($transactionId) {
    $transactionId = filter_var($transactionId, FILTER_SANITIZE_NUMBER_INT);

    // Prepare the query to prevent SQL injection (using prepared statements)
    $stmt = $conn->prepare("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = ?");
    $stmt->bind_param("i", $transactionId);
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->get_result();
    
    // Check if a result was returned
    if ($result->num_rows > 0) {
        $fetch = $result->fetch_array(MYSQLI_ASSOC);
    } else {
        echo "<div class='alert alert-danger'>No data found for the given transaction ID.</div>";
        exit; // Exit the script if no data found
    }
    
    $stmt->close();
} else {
    echo "<div class='alert alert-danger'>Invalid transaction ID.</div>";
    exit; // Exit the script if transaction_id is not valid
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $senderEmail = filter_var($_POST['senderEmail'], FILTER_SANITIZE_EMAIL);
    $receiverEmail = filter_var($_POST['receiverEmail'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

    // Validate email format
    if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Invalid sender email address.</div>";
    } elseif (!filter_var($receiverEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Invalid receiver email address.</div>";
    } else {
        // Send email
        $headers = "From: " . $senderEmail . "\r\n";
        $headers .= "Reply-To: " . $senderEmail . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($receiverEmail, $subject, $message, $headers)) {
            // Get the PHP id and transactionid values and pass them as JavaScript variables
            $id = $fetch['id']; // Assuming $fetch['id'] is available in PHP
            $transactionid = $fetch['transaction_id']; // Assuming $fetch['transaction_id'] is available in PHP

            // Echo the JavaScript for success
            echo "<script>
                    alert('Message sent successfully!');
                    // Redirect after sending, appending both id and transactionid as query parameters
                    window.location.href = 'go_discard_hotel.php?id=' + " . json_encode($id) . " + '&transactionid=' + " . json_encode($transactionid) . ";
                  </script>";
        } else {
            echo "<div class='alert alert-danger'>Failed to send email.</div>";
        }
    }
}
?>

 
<html lang = "en">
	<head>
	<title>Tinindag Festivals</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
			<a class = "navbar-brand" >Taysan: Where Potential Blossoms, and Tourism Thrives</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></i> <?php echo $name;?></a>
				</li>
				<li><a href = "index.php">Logout</a></li>	
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li class = ""><a href = "registered_user.php">Registered Accounts</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li class="active"><a href = "reserve.php">Hotel Booking</a></li>
			<li><a href = "reserve_resort.php">Resort Booking</a></li>
			<li ><a href = "room.php">Booking</a></li>		
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Booking Information</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "../admin_query/save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					
				<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['name']?>" class = "form-control" size = "30" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>email</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Hotel Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['hotel_name']?>" class = "form-control" size = "30" disabled = "disabled"/>
					</div>
					
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Room Type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" size = "10" disabled = "disabled"/>
						
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Reserved Date</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['checkin']?>" class = "form-control" size = "10" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Days</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "days" value = "<?php echo $fetch['days']?>" class = "form-control" disabled = "disabled"/>
					</div>
				
				
					<br style = "clear:both;"/>
					<br />
					
					
				</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Send Discard</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			 <form method="POST" id="sendEmailForm">
                    <!-- Sender Email (User inputs this) -->
                    <div class="form-group">
                        <label>Sender Email:</label>
                    <input type="email" class="form-control" name="senderEmail" value="taysanonlinebooking@gmail.com" required="required" readonly/>
                    </div>

                    <!-- Receiver Email (Pre-filled from PHP, fetched from database) -->
                    <div class="form-group">
                        <label>Receiver Email:</label>
                        <input type="email" class="form-control" name="receiverEmail" value="<?php echo htmlspecialchars($fetch['email']); ?>" required="required" readonly />
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" required="required" value="Discard Request Booking" disabled="disabled"/>
                    </div>

    <textarea class="form-control" name="message" required="required" rows="8" cols="50">
        <?php 
            echo "Dear Customer,\n\n";
            echo "We regret to inform you that your reservation has been successfully canceled. Below are the details of your canceled booking:\n\n";
            echo "Name: " . $fetch['name'] . "\n";
            echo "Hotel Name: " . $fetch['hotel_name'] . "\n";
            echo "Room Type: " . $fetch['room_type'] . "\n";
            echo "Reserved Date: " . $fetch['checkin'] . "\n";
            echo "Number of Days: " . $fetch['days'] . "\n";
            echo "Total Bill: " . $fetch['bill'] . "\n\n";
            echo "We understand that plans can change, and we hope to welcome you on another occasion. If you have any further questions or need assistance, please do not hesitate to contact us.\n\n";
            echo "Once again, we sincerely apologize for any inconvenience caused. Should you need to make another reservation in the future, we would be more than happy to assist you.\n\n";
            echo "Best regards,\n";
            echo "Your Hotel Name\n";
            echo "Hotel Address\n";
            echo "Hotel Contact Information\n";
        ?>
    </textarea>

    <br><center>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button>
    </center>
</form>

			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>
	</div>
	
    
    
    
</body>	
</html>