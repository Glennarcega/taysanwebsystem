<?php
if (isset($_POST['add_attraction'])) {
    $attraction_name = $_POST['attraction_name'];
    $descr = $_POST['descr'];
    $location = $_POST['location'];
    $transportation = $_POST['transportation'];
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $photo_name = addslashes($_FILES['photo']['name']);
    $photo_size = getimagesize($_FILES['photo']['tmp_name']);
    
    move_uploaded_file($_FILES['photo']['tmp_name'], "../photo/" . $_FILES['photo']['name']);

    // Corrected SQL query
    $query = "INSERT INTO `attraction` (attraction_name, descr, location, transportation, photo) 
              VALUES ('$attraction_name', '$descr', '$location', '$transportation', '$photo_name')";

    // Execute the query
    if ($conn->query($query)) {
        echo "<script>alert('Add Attraction Successfully!'); window.location.href = 'attraction.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
