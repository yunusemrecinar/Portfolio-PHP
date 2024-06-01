<?php
include 'models/ProjectModel.php';
$projects = getProjects();
$title = "Portfolio";
include 'views/header.php';
include 'views/portfolio.php';
include 'views/footer.php';