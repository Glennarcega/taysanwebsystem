<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['add_form'])){
		$room_no = $_POST['room_no'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Room not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'];
			$total4 = $fetch2['days'];
			$total5= $total * $total4;
			$total3 = $total5;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total5' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:../admin/checkin.php");
		}
	}
?>