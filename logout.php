<?php
    session_start(); // Start session
    session_unset(); // Unset session variables
    session_destroy(); // Destroy the session
    header("Location: new_login.php"); // Redirect to login page
    exit();
?>
