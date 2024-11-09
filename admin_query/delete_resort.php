<?php
	require_once '../connection/connect.php';
	$conn->query("DELETE FROM `resort` WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysql_error());
	header("location:../admin/resort.php");
?>