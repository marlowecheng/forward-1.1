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
            <section class="mentor-list">
                <section>
                    <h1>Mentor List</h1>
                </section>
                <section>
                    <div class="mentor-bar-wrapper">
                        <div>
                            <input type="text" placeholder="Search by role, job, language">
                        </div>
                        <div class="d-flex filter-btn">
                            <div class="mentor-filter">
                                <p>Specialization</p>
                                <img src="https://img.icons8.com/material/256/expand-arrow.png" alt="">
                            </div>
                            <div class="mentor-filter">
                                <p>Filter</p>
                            </div>
                        </div>
                    </div>
                <section>
                    <div class="all-mentors">
                        <?php foreach($mentors as $mentor): ?>
                            <?php include(get_path('public/partials/components/mentor-card.php')); ?>
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