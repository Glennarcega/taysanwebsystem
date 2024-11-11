<?php
	if(ISSET($_POST['add_room'])){
		$hotel_name = $_POST['hotel_name'];
		$room_type = $_POST['room_type'];
		$room_number = $_POST['room_number'];
		$price = $_POST['price'];
		$descr = $_POST['descr'];
		$location = $_POST['location'];
		$transportation = $_POST['transportation'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `room` (hotel_name, room_type, room_number, price,descr, location, transportation, photo) VALUES('$hotel_name','$room_type', '$room_number', '$price','$descr','$location','$transportation', '$photo_name')") or die(mysqli_error());
		//header("location:room.php");
		echo "<script>alert('Add Room Successfully!'); window.location.href = 'room.php';</script>";

	}
?>