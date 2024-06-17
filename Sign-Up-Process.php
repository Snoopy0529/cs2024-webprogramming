<?php
require_once "db_connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contactNumber = $_POST["contactNumber"];

    // Hash the password
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // SQL query to insert user information into the 'users_info_db' table
    $sql = "INSERT INTO users_info_db (username, password, fname, lname, dob, email, address, cnumber)
            VALUES ('$uname', '$hashedPassword', '$firstName', '$lastName', '$birthday', '$email', '$address', '$contactNumber')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful! Welcome, $firstName $lastName.";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
