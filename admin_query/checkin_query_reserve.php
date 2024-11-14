<?php 
// Include your database connection
require_once '../connection/connect.php'; // Ensure the path is correct for your project structure

// Set PHP timezone (adjust this to your timezone)
date_default_timezone_set('Asia/Manila');  // You can change this to your desired timezone

// Check if transaction_id is passed in the URL
if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Validate the transaction_id to ensure it's a valid number
    if (is_numeric($transaction_id)) {
        // Get the current time from PHP
        $checkin_time = date('Y-m-d H:i:s'); // Format it as 'YYYY-MM-DD HH:MM:SS'

        // SQL query to update the status to "Check In" and save the check-in time
        $query = "UPDATE transaction SET status = 'Check In', checkin_time = ? WHERE transaction_id = ?";

        // Prepare and execute the query
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("si", $checkin_time, $transaction_id); // Bind the check-in time and transaction_id
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // If the update was successful, redirect to the checkin.php page
                echo "<script>alert('Transaction Check-in successful!'); window.location.href = '../admin/checkin.php';</script>";
            } else {
                // If no rows were affected, the transaction may not exist or is already reserved
                echo "<script>alert('Error updating status. Please try again.'); window.location.href = '/admin/reserve1.php';</script>";
            }

            $stmt->close();
        } else {
            // Handle any errors with the query preparation
            echo "<script>alert('Failed to prepare the query.'); window.location.href = '/admin/reserve1.php';</script>";
        }
    } else {
        // If transaction_id is not a valid number
        echo "<script>alert('Invalid transaction ID.'); window.location.href = '/admin/reserve1.php';</script>";
    }
} else {
    // If the transaction_id is not set in the URL
    echo "<script>alert('Transaction ID not found.'); window.location.href = '/admin/reserve1.php';</script>";
}

// Close the database connection
$conn->close();
?>
