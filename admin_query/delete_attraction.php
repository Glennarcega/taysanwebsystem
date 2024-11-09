<?php
	require_once '../connection/connect.php';
	$conn->query("DELETE FROM `attraction` WHERE `attraction_id` = '$_REQUEST[attraction_id]'") or die(mysql_error());
	header("location:../admin/attraction.php");
?>