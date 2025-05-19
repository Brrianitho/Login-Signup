<?php
// Dummy email and password
$correctEmail = "user@example.com";
$correctPassword = "1234";

// Get form data
$email = $_POST['number'];
$password = $_POST['password'];

// Check credentials
if ($email === $correctEmail && $password === $correctPassword) {
    // Redirect to welcome page
    header("Location: welcome.html");
    exit();
} else {
    echo "Invalid number or password.";
}
?>
