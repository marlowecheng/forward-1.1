<div class="mentor-card">
    <img src="<?php echo get_public_url('/images/') . $mentor->image_url; ?>" alt="Mentor Profile Picture">
    <div class="mentor-info">
        <h4 class="mentor-name"><?php echo h($mentor->name); ?></h4>
        <p class="mentor-job"><?php echo h($mentor->job_title); ?></p>
        <ul class="d-flex mentor-specialization">
            <?php 
                foreach ($mentor->specialization as $tag) {
                    echo '<li class="mentor-special txt-xs">' . $tag . '</li>';
                }
            ?> 
        </ul>
        <p class="mentor-description"><?php echo h($mentor->user_bio); ?></p>
    </div>
</div>