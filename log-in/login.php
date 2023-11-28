<?php
session_start();

// Simulated user credentials (replace with your authentication logic)
$valid_username = 'mahin';
$valid_password = '123456';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        // Authentication failed
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>
