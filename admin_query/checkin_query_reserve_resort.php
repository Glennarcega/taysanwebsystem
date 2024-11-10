<?php 
// Include your database connection
require_once '../connection/connect.php'; // Ensure the path is correct for your project structure

// Check if transaction_id is passed in the URL
if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Validate the transaction_id to ensure it's a valid number
    if (is_numeric($transaction_id)) {
        // SQL query to update the status to "Reserved"
        $query = "UPDATE transactionresort SET status = 'Check In' WHERE transaction_id = ?";

        // Prepare and execute the query
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("i", $transaction_id); // Bind the transaction_id as an integer
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // If the update was successful, redirect to the reserve1.php page
                echo "<script>alert('Transaction Checkin successfully!'); window.location.href = '../admin/checkin_booking_resort.php';</script>";
            } else {
                // If no rows were affected, the transaction may not exist or is already reserved
                echo "<script>alert('Error updating status. Please try again.'); window.location.href = '/admin/reserve1_booking_resort.php';</script>";
            }

            $stmt->close();
        } else {
            // Handle any errors with the query preparation
            echo "<script>alert('Failed to prepare the query.'); window.location.href = '/admin/reserve1_booking_resort.php';</script>";
        }
    } else {
        // If transaction_id is not a valid number
        echo "<script>alert('Invalid transaction ID.'); window.location.href = '/admin/reserve1_booking_resort.php';</script>";
    }
} else {
    // If the transaction_id is not set in the URL
    echo "<script>alert('Transaction ID not found.'); window.location.href = '/admin/reserve1_booking_resort.php';</script>";
}

// Close the database connection
$conn->close();
?>
