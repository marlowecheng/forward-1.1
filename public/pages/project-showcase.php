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
            <section class="projects">
                <section>
                    <h1>Project Showcase</h1>
                </section>
                <section>
                    <div class="mentor-bar-wrapper">
                        <div>
                            <input type="text" placeholder="Search by role, job, language">
                        </div>
                        <div class="d-flex filter-btn">
                            <div class="mentor-filter">
                                <p>Sort By</p>
                            </div>
                            <div class="mentor-filter">
                                <p>Filter</p>
                            </div>
                        </div>
                    </div>
                <section>
                <section>
                    <div class="all-projects">
                        <?php foreach($projects as $project): ?>
                            <?php include(get_path('public/partials/components/project-card.php')); ?>
                        <?php endforeach; ?>
                    </div>
                </section>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>