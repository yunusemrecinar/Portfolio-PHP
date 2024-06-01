<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php?page=login');
    exit;
}
$title = "Admin";
include 'views/header.php';
include 'views/admin.php';
include 'views/footer.php';