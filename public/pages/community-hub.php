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
            <section>
                <div>
                    <h1>Community Hub</h1>
                    <h2>These are the current talks in Surrrey</h2>
                </div>
                <div class="community-card">
                    <div>
                        <img class="community-thumb" src="<?php echo get_public_url('/images/overwhelm-article.png'); ?>">
                    </div>  
                    <div class="community-card-info">
                        <div class="community-card-tags">
                            <ul>
                                <li class="purple">UI/UX</li>
                                <li class="orange">Venting</li>
                                <li class="turquoise">Seeking Advice</li>
                            </ul>
                        </div>
                        <div class="community-card-desc">
                            <h4>Feeling overwhelemed with this UI project</h4>
                            <p>Im a new UI designer and Im feeling seriously overwhelemed....</p>
                        </div>
                        <div class="community-card-meta">
                            <p>posted by @miapatel 6 hours ago</p>
                            <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">6 comments</p>
                        </div>
                    </div>
                </div>

                <div class="community-card">
                    <div>
                        <img class="community-thumb" src="<?php echo get_public_url('/images/overwhelm-article.png'); ?>">
                    </div>  
                    <div class="community-card-info">
                        <div class="community-card-tags">
                            <ul>
                                <li class="purple">UI/UX</li>
                                <li class="orange">Venting</li>
                                <li class="turquoise">Seeking Advice</li>
                            </ul>
                        </div>
                        <div class="community-card-desc">
                            <h4>Feeling overwhelemed with this UI project</h4>
                            <p>Im a new UI designer and Im feeling seriously overwhelemed....</p>
                        </div>
                        <div class="community-card-meta">
                            <p>posted by @miapatel 6 hours ago</p>
                            <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">6 comments</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>