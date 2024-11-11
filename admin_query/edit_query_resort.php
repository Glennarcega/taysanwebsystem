<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['edit_resort'])){
		$resort_name = $_POST['resort_name'];
		$price = $_POST['price'];
		$descr = $_POST['descr'];
		$location = $_POST['location'];
		$transportation = $_POST['transportation'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `resort` SET `resort_name` = '$resort_name', `price` = '$price',`descr` = '$descr',`location` = '$location',`transportation` = '$transportation', `photo` = '$photo_name' WHERE `resort_id` = '$_REQUEST[resort_id]'") or die(mysqli_error());
		//header("location:../admin/resort.php");
		echo "<script>alert('Update successfully!'); window.location.href = '../admin/resort.php';</script>";

	}
?>