<?php
include 'models/ProjectModel.php';
$project = getProjectById($_GET['id']);
if ($project) {
    $title = $project['title'];
    include 'views/header.php';
    include 'views/project-details.php';
    include 'views/footer.php';
} else {
    header('Location: index.php?page=portfolio');
}