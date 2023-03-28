<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_path('public/partials/global/head.php'));  ?> 
    <body>
        <?php 
            require(get_path('public/partials/global/header.php'));
        ?>
        <main class="grid grid-row">
            <?php
                require(get_path('public/partials/components/side-nav.php'));
            ?>
            <section class="results">
                <section>
                    <h1>We found you some matches!</h1>
                    <p>Take your first step and select one of the mentors below.</p>
                </section>
                <section class="matches">
                    <?php foreach(array_slice($mentors, 0, 3) as $mentor): ?>
                        <?php include(get_path('public/partials/components/mentor-card.php')); ?>
                    <?php endforeach; ?>
                </section>
                <div class="btn">
                    <a href="<?php echo get_public_url('/pages/mentor-list.php'); ?>" >See More Matches</a>
                </div>
                <section class="d-flex opts">
                    <a href="<?php echo get_public_url('/pages/survey.php'); ?>" title="Edit Answers"><img src="https://img.icons8.com/material/256/long-arrow-left--v2.png" alt="">Edit Answers</a>
                    <a href="<?php echo get_public_url('/pages/mentor-list.php'); ?>" title="See all Mentors">See All Mentors</a>
                </section>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>