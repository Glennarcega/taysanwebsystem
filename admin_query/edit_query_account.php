<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		//header("location:../admin/account.php");
		echo "<script>alert('Update Successfully!'); window.location.href = '../admin/account.php';</script>";

	}	