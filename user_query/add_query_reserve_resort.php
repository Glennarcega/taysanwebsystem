<?php
require_once 'connection/connect.php';

if (isset($_POST['add_guest'])) {
    $id = $_POST['id'];
    $resort_name = $_POST['resort_name'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $checkin = $_POST['date'];
    $days = $_POST['days'];
    $bill = $_POST['bill'];
    $resort_id = $_REQUEST['resort_id'];

    // Insert guest information
    $conn->query("INSERT INTO `guest` (name, address, contactno, email) VALUES('$name', '$address', '$contactno', '$email')") or die(mysqli_error($conn));

    // Retrieve guest ID
    $query = $conn->query("SELECT * FROM `guest` WHERE `name` = '$name' AND `contactno` = '$contactno' AND `email` = '$email'") or die(mysqli_error($conn));
    $fetch = $query->fetch_array();

    // Check if the room is available for the requested check-in date
    $query2 = $conn->query("SELECT * FROM `transactionresort` WHERE `checkin` = '$checkin' AND `resort_id` = '$resort_id' AND `status` = 'Pending'") or die(mysqli_error($conn));
    $row = $query2->num_rows;

    if ($checkin < date("Y-m-d", strtotime('+8 HOURS'))) {    
        echo "<script>alert('Check-in date must be a present or future date')</script>";
    } else {
        if ($guest_id = $fetch['guest_id']) {
            // Fetch room price from the room table
            $resort_query = $conn->query("SELECT price FROM `resort` WHERE `resort_id` = '$resort_id'") or die(mysqli_error($conn));
            $resort = $resort_query->fetch_array();
            

            // Insert transaction with total bill
            $conn->query("INSERT INTO `transactionresort` (id, resort_name, guest_id, resort_id, status, checkin, days,bill) VALUES ('$id', '$resort_name', '$guest_id', '$resort_id', 'Pending', '$checkin', '$days', '$bill')") or die(mysqli_error($conn));

            // Redirect to the reply page after successful insertion
            
            echo "<script>window.location.href = 'reply_reserve.php?id=" . urlencode($id) . "';</script>";
            exit;
            
        } else {
            echo "<script>alert('Error: Guest ID not found.')</script>";
        }
    }
}
?>
