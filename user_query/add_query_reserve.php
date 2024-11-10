<?php
require_once 'connection/connect.php';

if (isset($_POST['add_guest'])) {
    $id = $_POST['id'];
    $hotel_name= $_POST['hotel_name'];
    $room_number= $_POST['room_number'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $checkin = $_POST['date'];
    $days = $_POST['days'];
    $bill = $_POST['bill'];
    $room_id = $_REQUEST['room_id'];

    // Insert guest information
    $conn->query("INSERT INTO `guest` (name, address, contactno, email) VALUES('$name', '$address', '$contactno', '$email')") or die(mysqli_error($conn));

    // Retrieve guest ID
    $query = $conn->query("SELECT * FROM `guest` WHERE `name` = '$name' AND `contactno` = '$contactno' AND `email` = '$email'") or die(mysqli_error($conn));
    $fetch = $query->fetch_array();

    // Check if the room is available for the requested check-in date
    $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' AND `room_id` = '$room_id' AND `status` = 'Pending'") or die(mysqli_error($conn));
    $row = $query2->num_rows;

    if ($checkin < date("Y-m-d", strtotime('+8 HOURS'))) {    
        echo "<script>alert('Check-in date must be a present or future date')</script>";
    } else {
        if ($guest_id = $fetch['guest_id']) {
            // Fetch room price from the room table
            $room_query = $conn->query("SELECT price FROM `room` WHERE `room_id` = '$room_id'") or die(mysqli_error($conn));
            $room = $room_query->fetch_array();
            

            // Insert transaction with total bill
            $conn->query("INSERT INTO `transaction` (id, guest_id, hotel_name,room_number, room_id, status, checkin, days,bill) VALUES ('$id', '$guest_id', '$hotel_name', '$room_number',  '$room_id', 'Pending', '$checkin', '$days', '$bill')") or die(mysqli_error($conn));

            // Redirect to the reply page after successful insertion
            
            echo "<script>window.location.href = 'reply_reserve.php?id=" . urlencode($id) . "';</script>";
exit;

        } else {
            echo "<script>alert('Error: Guest ID not found.')</script>";
        }
    }
}
?>
