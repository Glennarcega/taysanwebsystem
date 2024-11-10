<?php
	require_once '../connection/connect.php';
	$time = date("H:i:s", strtotime("+8 HOURS"));
	$conn->query("UPDATE `transactionresort` SET `checkout_time` = '$time', `status` = 'Check Out' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	//header("location:../admin/checkout_booking_resort.php");
	echo "<script>alert('Update Successfully!'); window.location.href = '../admin/checkout_booking_resort.php';</script>";

?>