<?php
require_once "db_connection.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM users_info_db WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there is a match
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password using password_hash
        if (password_verify($password, $row['password'])) {
            // Successful login
            $_SESSION['username'] = $username;
            echo "<script>alert('Successfully logged in!');</script>";
            header('Location: index.php');
            exit();
        } else {
            // Invalid password
            echo "<p class='error'>Invalid password. Please try again.</p>";
        }
    } else {
        // User not found
        echo "<p class='error'>Invalid username. Please try again.</p>";
    }

    // Close the prepared statement
    $stmt->close();
    // Close the database connection
    $conn->close();
}
?>
