<?php
// signup.php
$email = $_POST['number'] ?? '';
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

if ($password !== $confirm) {
    echo "Passwords do not match.";
    exit();
}

// Example: save user (this should be a database insert in production)
$file = fopen("users.txt", "a");
fwrite($file, "$number:$password\n");
fclose($file);

header("Location: login.html");
exit();
?>
