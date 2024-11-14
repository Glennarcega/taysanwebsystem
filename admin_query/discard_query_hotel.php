<?php 
// Include your database connection
require_once '../connection/connect.php'; // Ensure the path is correct for your project structure

// Check if transaction_id is passed in the URL
if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Validate the transaction_id to ensure it's a valid number
    if (is_numeric($transaction_id)) {
        // SQL query to update the status to "Discard"
        $query = "UPDATE transaction SET status = 'Discard' WHERE transaction_id = ?";

        // Prepare the statement to prevent SQL injection
        if ($stmt = $conn->prepare($query)) {
            // Bind the parameter to the query
            $stmt->bind_param("i", $transaction_id);

            // Execute the query
            if ($stmt->execute()) {
                // Check if any row was affected
                if ($stmt->affected_rows > 0) {
                    // JavaScript alert and redirection
                    echo "<script>alert('Transaction discarded successfully!'); window.location.href = '../admin/reserve.php';</script>";
                } else {
                    echo "No transaction found with the given ID.";
                }
            } else {
                echo "Error executing the query: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the query: " . $conn->error;
        }
    } else {
        echo "Invalid transaction ID.";
    }
} else {
    echo "Transaction ID not provided.";
}

// Close the database connection
$conn->close();
?>
