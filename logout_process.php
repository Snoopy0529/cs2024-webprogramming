<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index.php page after logout
header("Location: /cs2024-webprogramming/index.php");
exit();
?>
