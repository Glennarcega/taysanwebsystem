<?php
	if(ISSET($_POST['add_cuisine'])){
		$cuisine_name = $_POST['cuisine_name'];
		$location = $_POST['location'];
		$descr = $_POST['descr'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `cuisine` (cuisine_name, location, descr, photo) VALUES('$cuisine_name','$location','$descr', '$photo_name')") or die(mysqli_error());
		header("location:cuisine.php");
	}
?>