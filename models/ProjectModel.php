<?php
function getProjects() {
    // This could be a database query in a real application
    return [
        [
            'title' => 'Project One',
            'description' => 'Description for project one.',
            'image' => 'project1.jpg',
            'link' => 'https://example.com/project1',
        ],
        [
            'title' => 'Project Two',
            'description' => 'Description for project two.',
            'image' => 'project2.jpg',
            'link' => 'https://example.com/project2',
        ],
        [
            'title' => 'Project Three',
            'description' => 'Description for project three.',
            'image' => 'project3.jpg',
            'link' => 'https://example.com/project3',
        ],
        [
            'title' => 'Project Four',
            'description' => 'Description for project four.',
            'image' => 'project4.jpg',
            'link' => 'https://example.com/project4',
        ],
        [
            'title' => 'Project Five',
            'description' => 'Description for project five.',
            'image' => 'project5.jpg',
            'link' => 'https://example.com/project5',
        ],
        [
            'title' => 'Project Six',
            'description' => 'Description for project six.',
            'image' => 'project6.jpg',
            'link' => 'https://example.com/project6',
        ]
    ];
}

function getProjectById($id) {
    $projects = getProjects();
    foreach($projects as $project) {
        if ($project['id'] == $id) {
            return $project;
        }
    }

    return null;
}