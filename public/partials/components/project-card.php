<div class="project-card">
    <img src="<?php echo get_public_url('/images/') . $project->image; ?>" alt="Mentor Profile Picture">
    <div class="mentor-info">
        <h2 class="project-name"><?php echo h($project->name); ?></h2>
        <p class="project-author"><?php echo h($project->author_name); ?></p>
        <ul class="d-flex project-tags">
            <?php 
                foreach ($project->tags as $tag) {
                    echo '<li class="project-tag">' . $tag . '</li>';
                }
            ?> 
        </ul>
    </div>
</div>