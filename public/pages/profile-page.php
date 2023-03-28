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
            <section class="profile-content">
                <h1>Hiya, Dave!</h1>
                <section class="profile-card">
                    <div class="card-information">
                        <h2>Let's Find a Mentor</h2>
                        <p>Take our survey and we'll help you find a compatible mentor near you</p>
                        <a href="<?php echo get_public_url('/pages/survey.php'); ?>">Go to Survey &rarr;</a>
                    </div>
                    <img class="card-thumb" src="<?php echo get_public_url('/images/find-a-mentor.jpg'); ?>" alt="">
                </section>
                <section class="profile-card">
                    <div class="card-information">
                        <h2>Find a Community!</h2>
                        <p>Join a community and work together on your goals.</p>
                        <a href="#">Go to Community Hub &rarr;</a>
                    </div>
                    <img class="card-thumb" src="<?php echo get_public_url('/images/find-a-community.jpg'); ?>" alt="">
                </section>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>