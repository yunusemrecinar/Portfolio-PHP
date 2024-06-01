<?php
session_start();
$title = "Login";
include 'views/header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    // Use a more secure method for handling passwords in a real application
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['loggedin'] = true;
        header('Location: index.php?page=admin');
    } else {
        $feedback = "Invalid login credentials";
    }
}
include 'views/login.php';
include 'views/footer.php';