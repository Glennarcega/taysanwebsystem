<?php
	if(ISSET($_POST['add_resort'])){
		$resort_name = $_POST['resort_name'];
		$price = $_POST['price'];
		$descr = $_POST['descr'];
		$location = $_POST['location'];
		$transportation = $_POST['transportation'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `resort` (resort_name, price,descr,location,transportation, photo) VALUES('$resort_name', '$price','$descr','$location','$transportation', '$photo_name')") or die(mysqli_error());
	//	header("location:resort.php");
		echo "<script>alert('Add Resort Successfully!'); window.location.href = 'resort.php';</script>";

	}
?>