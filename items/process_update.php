<?php
require_once "../db_connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the itemId is set in the $_POST data
    if (isset($_POST['itemId'])) {
        $itemId = $_POST['itemId'];

        // Retrieve the antique details from the database based on itemId
        $sql = "SELECT * FROM antique_information_db WHERE itemId = $itemId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $antiqueDetails = $result->fetch_assoc();

            // Update antique information with the submitted form data
            $name = $_POST['name'];
            $type = $_POST['Type'];
            $age = $_POST['age'];
            $dateProcured = $_POST['date_procured'];
            $location = $_POST['location'];
            $description = $_POST['description'];

            $updateSql = "UPDATE antique_information_db 
                          SET name = '$name', type = '$type', age = '$age', 
                              date_procured = '$dateProcured', location = '$location', 
                              description = '$description'
                          WHERE itemId = $itemId";

            if ($conn->query($updateSql) === TRUE) {
                echo "Antique information updated successfully.";
                header('Location: antique_furnitures.php');
                // You can redirect the user to a different page or display a success message
            } else {
                echo "Error updating antique information: " . $conn->error;
            }
        } else {
            echo "No records found for itemId $itemId.";
        }
    } else {
        echo "itemId not provided in the form data.";
    }
} else {
    // Redirect or display an error message if the form is not submitted
    echo "Form not submitted.";
}

// Close the database connection
$conn->close();
?>
