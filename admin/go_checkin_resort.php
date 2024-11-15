<!DOCTYPE html>
<?php
	require_once '../admin_query/validate.php';
	require '../admin_query/name.php';
?>
<html lang = "en">
	<head>
	<title>Tinindag Festivals</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../sendemail/css/bootstrap.css"/>
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
			<li ><a href = "reserve.php">Hotel Booking</a></li>
			<li class="active"><a href = "reserve_resort.php">Resort Booking</a></li>
			<li ><a href = "room.php">Booking</a></li>			
		</ul>	
	</div>
	
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transactionresort` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_c = $conn->query("SELECT COUNT(*) as total FROM `transactionresort` WHERE `status` = 'Reserved'") or die(mysqli_error());
				$f_c = $q_c->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transactionresort` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
				$q_cw = $conn->query("SELECT COUNT(*) as total FROM `transactionresort` WHERE `status` = 'Check Out'") or die(mysqli_error());
				$f_cw = $q_cw->fetch_array();
			?>
			<div class = "panel-body">
	
				<a class = "btn btn-info disabled" href="reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-info" href="reserve1.php"><span class = "badge"><?php echo $f_c['total']?></span> Reserved</a>
				<a class = "btn btn-info disabled" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
				<a class = "btn btn-info disabled" href = "checkout.php"><span class = "badge"><?php echo $f_cw['total']?></span> Check Out</a>
				<br />
				<br />
			
				<br />
				
				<br />
				
				
 
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Contact No</th>
							<th>Email</th>
							<th>Resort Name</th>
						
							<th>Reserved Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						
					</thead>
					<tbody>
					<?php
    // Assume $id is passed to this script (e.g., via GET or POST method)
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        $query = $conn->query("SELECT * FROM `transactionresort` 
                               NATURAL JOIN `guest` 
                               NATURAL JOIN `resort` 
                               WHERE `status` = 'Pending' 
                               AND `id` = '$id'") 
        or die(mysqli_error($conn));
        
        while($fetch = $query->fetch_array()){
?>
            <tr>
                <td><?php echo $fetch['name']; ?></td>
                <td><?php echo $fetch['contactno']; ?></td>
                <td><?php echo $fetch['email']; ?></td>
                <td><?php echo $fetch['resort_name']; ?></td>
                <td>
                    <strong>
                        <?php 
                            if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){
                                echo "<label style='color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
                            } else {
                                echo "<label style='color:#00ff00;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
                            }
                        ?>
                    </strong>
                </td>
                <td><?php echo $fetch['status']; ?></td>
                <td>
                    <center>
<a class="btn btn-success" href="../admin_query/confirm_query_reserve_resort.php?id=<?php echo $fetch['id']; ?>&transaction_id=<?php echo $fetch['transaction_id']; ?>"> Reserve</a>
                    </center>
                </td>
            </tr>
<?php
        }
    } else {
        echo "No ID specified.";
    }
?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
                
    
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
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
	
</html>