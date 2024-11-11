<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['edit_cuisine'])){
		$cuisine_name = $_POST['cuisine_name'];
		$descr = $_POST['descr'];
        //$location = $_POST['location'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `cuisine` SET `cuisine_name` = '$cuisine_name',`descr` = '$descr', `photo` = '$photo_name' WHERE `cuisine_id` = '$_REQUEST[cuisine_id]'") or die(mysqli_error());
        echo "<script>alert('Update successfully!'); window.location.href = '../admin/cuisine.php';</script>";

	}
?>