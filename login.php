<?php
// Simple login check (replace with real authentication logic)
if ($_POST['username'] == 'yourUsername' && $_POST['password'] == 'yourPassword') {
    header('Location: dashboard.html');
    exit();
} else {
    echo 'Invalid credentials.';
}
?>
