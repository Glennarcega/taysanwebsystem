<?php
	require_once '../connection/connect.php';
	if(ISSET($_POST['edit_attraction'])){
		$attraction_name = $_POST['attraction_name'];
		$descr = $_POST['descr'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `attraction` SET `attraction_name` = '$attraction_name',`descr` = '$descr', `photo` = '$photo_name' WHERE `attraction_id` = '$_REQUEST[attraction_id]'") or die(mysqli_error());
		//header("location:../admin/attraction.php");
		echo "<script>alert('Update Successfully!'); window.location.href = '../admin/attraction.php';</script>";

	}
?>