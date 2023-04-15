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
        <main class="grid">
            <?php
                require(get_path('public/partials/components/side-nav.php'));
            ?>
            <section class="community-section">
                <div>
                    <h1>Community Hub</h1>
                    <h2>These are the current talks in Surrrey</h2>
                </div>
                <div class="community-card-container">

                    <div class="community-card hover-fx">
                        <div>
                            <img class="community-thumb" src="<?php echo get_public_url('/images/overwhelm-article.png'); ?>">
                        </div>  
                        
                        <div class="community-card-info">
                            <div class="filter-tags">
                                <ul>
                                    <li class="purple">UI/UX</li>
                                    <li class="peach">Venting</li>
                                    <li class="aqua">Seeking Advice</li>
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


                    <div class="community-card hover-fx">
                        <div class="community-card-info">
                            <div class="community-card-desc">
                                <h4>How can I improve my UI/UX skills as a beginner designer?</h4>
                                <p>Hello everyone! I'm a beginner UI/UX designer, and I'm struggling with creating user-friendly interfaces that are visually appealing. I'm having difficulty understanding how to...</p>
                            </div>
                            <div class="pt-215">
                                <div class="filter-tags">
                                    <ul>
                                        <li class="purple">UI/UX</li>
                                        <li class="aqua">Seeking Advice</li>
                                    </ul>
                                </div>
                                <div class="community-card-meta">
                                    <p>posted by @lilbrowndesigns 9 hours ago</p>
                                    <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">10 comments</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="community-card hover-fx">
                        <div class="community-card-info">
                            <div class="community-card-desc">
                                <h4>Dealing with difficult stakeholders in project management - seeking advice</h4>
                                <p>Hey guys, I'm a project manager, and I'm dealing with a real pain in the butt stakeholder. They keep throwing curveballs, and it's making it hard to deliver on time. I'm finding...</p>                                                                                         
                            </div>
                            <div class="filter-tags">
                                <ul>
                                    <li class="mint">Project Management</li>
                                    <li class="aqua">Seeking Advice</li>
                                </ul>
                            </div>
                            <div class="pt-190">
                                <div class="community-card-meta">
                                    <p>posted by @lukemitchellpm 1 day ago</p>
                                    <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">21 comments</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="community-card hover-fx">
                        <div>
                            <img class="community-thumb" src="<?php echo get_public_url('/images/mental-health-article.png'); ?>">
                        </div>  
                        <div class="community-card-info">
                            <div class="filter-tags">
                                <ul>
                                    <li class="grape">Mental Health</li>
                                    <li class="aqua">Seeking Advice</li>
                                    <li class="peach">General</li>
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

            <section class="filter-container border">
                <div class="filter-search-bar">
                    <input type="text" class="searchTerm" placeholder="Search Community...">
                </div>
                <div class="filter-tags">
                    <p>Filters: </p>
                    <ul>
                        <li class="purple">UI/UX</li>
                        <li class="mustard">Coding</li>
                        <li class="aqua">Seeking Advice</li>
                        <li class="mint">Project Management</li>
                        <li class="peach">Venting</li>
                        <li class="grass">General</li>
                        <li class="rasp">Introductions</li>
                        <li class="grape">Mental Health</li>
                    </ul>
                <div>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>