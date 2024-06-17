<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../db_connection.php";

// Check if the itemId is set in the $_GET data
if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];
    echo "Received itemId: " . $itemId;

    // Prepare a statement to avoid SQL injection
    $stmt = $conn->prepare("DELETE FROM antique_information_db WHERE itemId = ?");
    
    // Bind the parameter
    $stmt->bind_param("i", $itemId);

    // Execute the statement
    if ($stmt->execute()) {
        echo " Item deleted successfully.";
        header("Location: antique_furnitures.php");
    } else {
        echo "Error deleting item: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
} else {
    echo "itemId not provided in the URL.";
}

?>
