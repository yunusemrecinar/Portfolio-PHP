<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'home':
        include 'controllers/HomeController.php';
        break;
    case 'about':
        include 'controllers/AboutController.php';
        break;
    case 'porfolio':
        include 'controllers/PortfolioController.php';
        break;
    case 'contact':
        include 'controllers/ContactController.php';
        break;
    case 'login':
        include 'controllers/LoginController.php';
        break;
    case 'projects':
        include 'controllers/ProjectsController.php';
        break;
    default:
        include 'controllers/HomeController.php';
}