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
                <div class="community-card-container">

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
                        <div class="community-card-info">
                            <div class="community-card-desc">
                                <h4>How can I improve my UI/UX skills as a beginner designer?</h4>
                                <p>Im a new UI designer and Im feeling seriously overwhelemed....</p>
                            </div>
                            <div class="community-card-tags">
                                <ul>
                                    <li class="purple">UI/UX</li>
                                    <li class="turquoise">Seeking Advice</li>
                                </ul>
                            </div>
                            <div class="community-card-meta">
                                <p>posted by @lilbrowndesigns 9 hours ago</p>
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">10 comments</p>
                            </div>
                        </div>
                    </div>


                    <div class="community-card">
                        <div class="community-card-info">
                            <div class="community-card-desc">
                                <h4>Dealing with difficult stakeholders in project management - seeking advice</h4>
                                <p>Hey guys, I'm a project manager, and I'm dealing with a real pain in the butt stakeholder. They keep throwing curveballs, and it's making it hard to deliver on time. I'm finding...</p>                                                                                         
                            </div>
                            <div class="community-card-tags">
                                <ul>
                                    <li class="light-green">Project Management</li>
                                    <li class="turquoise">Seeking Advice</li>
                                </ul>
                            </div>
                            <div class="community-card-meta">
                                <p>posted by @lukemitchellpm 1 day ago</p>
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">21 comments</p>
                            </div>
                        </div>
                    </div>


                    <div class="community-card">
                        <div>
                            <img class="community-thumb" src="<?php echo get_public_url('/images/mental-health-article.png'); ?>">
                        </div>  
                        <div class="community-card-info">
                            <div class="community-card-tags">
                                <ul>
                                    <li class="purple">Mental health</li>
                                    <li class="turquoise">Seeking Advice</li>
                                    <li class="orange">General</li>
                                </ul>
                            </div>
                            <div class="community-card-desc">
                                <h4>Struggling with mental health...</h4>
                                <p>I'm finding it hard to switch off and disconnect from work whe...</p>
                            </div>
                            <div class="community-card-meta">
                                <p>posted by @gabekim 1 day ago</p>
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">35 comments</p>
                            </div>
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