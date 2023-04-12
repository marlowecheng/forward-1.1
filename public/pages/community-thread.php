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
            <section class="no-margin active-container thread-main">
                <div class="btn-bwd"><a href="" class="d-flex">
                    <i data-feather="arrow-left"></i>Go Back
                </a></div>
                <div class="thread-content">
                    <div class="thread-head">
                        <div class="head-info">
                            <img src="<?php echo get_public_url('/images/rikki-soriano-profile-image.jpg'); ?>" alt="" class="avatar">
                            <p >Posted by @lilybrowndesigns 9 hours ago</p>
                            <div class="community-card-tags">
                                
                            </div>
                        </div>
                        <div class="head-icons">
                            <i data-feather="bookmark"></i>
                            <i data-feather="share"></i>
                        </div>
                    </div>
                    <div class="thread-body">
                        <h2>How can I improve my UI/UX skills as a beginner designer?</h2>
                        <p>Hello everyone! I'm a beginner UI/UX designer, and I'm struggling with creating user-friendly interfaces that are visually appealing. </p>
                        <p>I'm having difficulty understanding how to balance the visual design with the functional aspects of the interface. Additionally, I find it challenging to keep up with the latest design trends and technologies. </p>
                        <p>I've tried to learn from online tutorials, but I still feel like I'm missing something. I would appreciate it if anyone could share their experience and advice on how to improve my UI/UX design skills. What resources do you recommend for learning about the design principles and best practices?</p> 
                        <p>Are there any specific techniques or practices that have helped you improve your design skills? I'm open to any suggestions that can help me create intuitive, user-friendly interfaces. </p>
                        <p>Thank you in advance for your help!</p>
                    </div>
                </div>
            </section>
            <section class="no-margin thread-comments">
                <div class="">
                    
                </div>
            </section>
            <section class="no-margin thread-side">
                <div class="filter-search-bar border">
                    <input type="text" class="searchTerm" placeholder="Search Community...">
                </div>
                <div class="more-threads">

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
                                <h4>Feeling overwhelmed with this UI project</h4>
                                <p>Im a new UI designer and Im feeling seriously overwhelmed....</p>
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
                                <h4>Dealing with difficult stakeholders in project management - seeking advice</h4>
                                <p>Hey guys, I'm a project manager, and I'm dealing with a real pain in the butt stakeholder. They keep throwing curveballs, and it's making it hard to deliver on time. I'm finding...</p>                                                                                         
                            </div>
                            <div class="filter-tags">
                                <ul>
                                    <li class="mint">Project Management</li>
                                    <li class="aqua">Seeking Advice</li>
                                </ul>
                            </div>
                            <div class="community-card-meta">
                                <p>posted by @lukemitchellpm 1 day ago</p>
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>">21 comments</p>
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