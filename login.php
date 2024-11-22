<?php
// Simple login check (replace with real authentication logic)
if ($_POST['username'] == 'Username' && $_POST['password'] == 'Password') {
    header('Location: dashboard.html');
    exit();
} else {
    echo 'Invalid credentials.';
}
?>
