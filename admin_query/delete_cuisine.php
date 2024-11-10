<?php
	require_once '../connection/connect.php';
	$conn->query("DELETE FROM `cuisine` WHERE `cuisine_id` = '$_REQUEST[cuisine_id]'") or die(mysql_error());
	header("location:../admin/cuisine.php");
?>