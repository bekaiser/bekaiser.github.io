<?php
// Start the session
session_start();

// Define hardcoded credentials (replace with database validation in production)
$valid_username = 'Username';
$valid_password = 'Password';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve the input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    // Validate the credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Store user info in the session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the dashboard
        header('Location: dashboard.html');
        exit();
    } else {
        // Redirect back to login with an error message
        header('Location: login.html?error=Invalid%20credentials');
        exit();
    }
} else {
    // Redirect to login page if not a POST request
    header('Location: login.html');
    exit();
}
?>
