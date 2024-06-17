<?php
require_once "../db_connection.php";
session_start();

// Check if the username is set in the $_SESSION data
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];

    // Display the logged-in user
    echo "<h2>Logged in as:  $loggedInUser </h2>";
} else {
    // Handle the case when the username is not set in $_SESSION
    echo 'Username not provided in session.';
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the itemId is set in the $_POST data
    if (isset($_POST['itemId'])) {
        $itemId = $_POST['itemId'];

        // Fetch the antique details from the database based on itemId
        $sql = "SELECT * FROM antique_information_db WHERE itemId = $itemId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $antiqueDetails = $result->fetch_assoc();
            // Display the form with antique details
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Update Antique Information</title>
                <!-- Add your CSS styles or include Bootstrap if needed -->
            </head>
            <body>
                <h2>Update Antique Information</h2>
                <form action="process_update.php" method="post">
                    <input type="hidden" name="itemId" value="<?php echo $itemId; ?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $antiqueDetails['name']; ?>" required><br>

                    <label for="Type">Type:</label>
                    <input type="text" id="Type" name="Type" value="<?php echo isset($antiqueDetails['Type']) ? $antiqueDetails['Type'] : ''; ?>" required><br>
                    
                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" value="<?php echo isset($antiqueDetails['age']) ? $antiqueDetails['age'] : ''; ?>" required><br>

                    <label for="date_procured">Date Procured:</label>
                    <input type="text" id="date_procured" name="date_procured" value="<?php echo isset($antiqueDetails['date_procured']) ? $antiqueDetails['date_procured'] : ''; ?>" required><br>

                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" value="<?php echo isset($antiqueDetails['location']) ? $antiqueDetails['location'] : ''; ?>" required><br>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required><?php echo isset($antiqueDetails['description']) ? $antiqueDetails['description'] : ''; ?></textarea><br>

                    <input type="submit" value="Update">
                </form>
            </body>
            </html>
<?php
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
?>
