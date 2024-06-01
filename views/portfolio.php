<div class="portfolio">
    <h1>My Projects</h1>
    <div class="projects">
        <?php foreach($projects as $project): ?>
            <div class="project">
                <div class="image">
                    <img src="images/<?= $project['image']; ?>" alt="<?= $project['title']; ?> "/>
                </div>    
                <div class="content">
                    <h2><?= $project['title']; ?></h2>
                    <p><?= $project['description']; ?></p>
                    <a href="<?= $project['link']; ?>" target="_blank">View Project</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>