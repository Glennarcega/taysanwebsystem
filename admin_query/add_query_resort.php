<?php
	if(ISSET($_POST['add_resort'])){
		$resort_name = $_POST['resort_name'];
		$price = $_POST['price'];
		$descr = $_POST['descr'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `resort` (resort_name, price,descr, photo) VALUES('$resort_name', '$price','$descr', '$photo_name')") or die(mysqli_error());
		header("location:resort.php");
	}
?>