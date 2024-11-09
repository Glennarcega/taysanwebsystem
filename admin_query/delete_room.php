<?php
	require_once '../connection/connect.php';
	$conn->query("DELETE FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
	header("location:../admin/room.php");
?>