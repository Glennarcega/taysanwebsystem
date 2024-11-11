<?php 
// Include your database connection
require_once '../connection/connect.php'; // Ensure the path is correct for your project structure

// Check if transaction_id is passed in the URL
if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Validate the transaction_id to ensure it's a valid number
    if (is_numeric($transaction_id)) {
        // SQL query to update the status to "Cancel"
        $query = "UPDATE transactionresort SET status = 'Cancel' WHERE transaction_id = ?";

        // Prepare and execute the query
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("i", $transaction_id); // Bind the transaction_id as an integer
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // If the update was successful, redirect to the records.php page
                $id = isset($_GET['id']) ? $_GET['id'] : ''; // Define $id from the GET request or set a default
                echo "<script>
                    alert('Transaction canceled successfully!');
                    window.location.href = '../records_resort.php?id=" . urlencode($id) . "';
                </script>";
                exit;
            
            } else {
                // If no rows were affected, the transaction may not exist or is already canceled
                $id = isset($_GET['id']) ? $_GET['id'] : '';
                echo "<script>
                    alert('Error updating status. Please try again.');
                    window.location.href = '../records_resort.php?id=" . urlencode($id) . "';
                </script>";
                exit;
            }

            $stmt->close();
        } else {
            // Handle any errors with the query preparation
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            echo "<script>
                    alert('Failed to prepare the query.');
                    window.location.href = '../records_resort.php?id=" . urlencode($id) . "';
                </script>";
                exit;
        }
    } else {
        // If transaction_id is not a valid number
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        echo "<script>
                    alert('Invalid transaction ID.');
                    window.location.href = '../records_resort.php?id=" . urlencode($id) . "';
                </script>";
                exit;
    }
} else {
    // If the transaction_id is not set in the URL
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    echo "<script>
    alert('Transaction ID not found.');
    window.location.href = '../records_resort.php?id=" . urlencode($id) . "';
</script>";
exit;
}

// Close the database connection
$conn->close();
?>
