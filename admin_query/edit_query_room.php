<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['edit_room'])){
		$hotel_name = $_POST['hotel_name'];
		$room_type = $_POST['room_type'];
		$room_number = $_POST['room_number'];
		$price = $_POST['price'];
		$descr = $_POST['descr'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `room` SET `hotel_name` = '$hotel_name',`room_type` = '$room_type', `room_number` = '$room_number', `price` = '$price',`descr` = '$descr', `photo` = '$photo_name' WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
		echo "<script>alert('Update successfully!'); window.location.href = '../admin/room.php';</script>";

	}
?>