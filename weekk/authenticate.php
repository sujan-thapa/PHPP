<?php
session_start();

// Define a hardcoded user for demonstration purposes
// In a real application, you would fetch these from a database
$stored_username = 'user';
$stored_password_hash = password_hash('password123', PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $stored_username && password_verify($password, $stored_password_hash)) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        header('Location: login.php?error=1');
        exit();
    }
}
?>
