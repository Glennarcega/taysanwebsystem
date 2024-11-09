<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['update_guest'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$days = $_POST['days'];
		$conn->query("UPDATE `guest` (firstname, middlename, lastname, address, contactno) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		
		$conn->query("UPDATE `transaction`(checkin,days) VALUES('$checkin','$days')") or die(mysqli_error());
		
		header("location:inbox.php");
						
	}
?>