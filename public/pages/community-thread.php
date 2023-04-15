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
                <div class="btn-bwd"><a href="<?php echo get_public_url('/pages/community-hub.php'); ?>" class="d-flex" title="Go back to Community Hub">
                    <i data-feather="arrow-left"></i>Go Back
                </a></div>
                <div class="thread-content">
                    <div class="thread-head">
                        <div class="head-info">
                            <img src="<?php echo get_public_url('/images/rikki-soriano-profile-image.jpg'); ?>" alt="User Avatar" class="avatar">
                            <p>Posted by @lilybrowndesigns 9 hours ago</p>
                            <div class="filter-tags">
                                <ul>
                                    <li class="purple">UI/UX</li>
                                    <li class="aqua">Seeking Advice</li>
                                </ul>
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
                    <div class="thread-footer">
                        <div class="j-left">
                            <div class="icon-save">
                                <i data-feather="bookmark"></i><p class="txt-xs">Save for later</p>
                            </div>
                            <div class="icon-share">
                            <i data-feather="share"></i><p class="txt-xs">Share</p>
                            </div>
                        </div>
                        <div class="icon-report j-right">
                            <i data-feather="flag"></i><p class="txt-xs">Report</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-margin thread-comments border">
                <h4>Conversations (10)</h4>
                <div class="comment-form">
                    <input type="text" class="comment-box" placeholder="What are your thoughts?">
                    <div class="comment-btns">
                        <div class="btn-tertiary"><a href="#">Cancel</a></div>
                        <div class="btn"><a href="#">Submit</a></div>
                    </div>
                </div>
                <div class="user-comment border">
                        <div class="avatar-comment">
                            <img src="" alt="User Avatar">
                        </div>
                        <div class="comment-content">
                            <p class="txt-xs">@oliviah_ux 12 hours ago</p>
                            <p>Hey there, fellow designer! I totally understand where you're coming from. The world of UI/UX can be a little overwhelming at first, but don't worry - we've all been there. First things first, don't be too hard on yourself. It takes time and practice to develop those skills, so don't give up! As for resources, there are plenty of great design blogs, YouTube channels, and online courses that can help you improve your skills. I'd also recommend one of the Forward mentors here so you can bounce ideas get feedback on your work.</p>
                            <p>Hope that helps, and best of luck on your design journey!</p>
                        </div>
                    </div>
                </div>
                <div class="user-comment border">
                        <div class="avatar-comment">
                            <img src="" alt="User Avatar">
                        </div>
                        <div class="comment-content">
                            <p class="txt-xs">@benjileet 17 hours ago</p>
                            <p>Hey, I hear you! I was once in your shoes as a beginner designer, struggling to create user-friendly interfaces that looked good too. The best tip I have is to share your designs with others and ask for feedback. It can be scary to put your work out there, but it's a sure fire way to get better and to improve. :)</p>
                        </div>
                    </div>
                </div>
                <div class="user-comment border">
                        <div class="avatar-comment">
                            <img src="" alt="User Avatar">
                        </div>
                        <div class="comment-content">
                            <p class="txt-xs">@alexwils2 19 hours ago</p>
                            <p>Hey, I hear you! I was once in your shoes as a beginner designer, struggling to create user-friendly interfaces that looked good too. The best tip I have is to share your designs with others and ask for feedback. It can be scary to put your work out there, but it's a sure fire way to get better and to improve. :)</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-margin thread-side">
                <div class="filter-search-bar border">
                    <input type="text" class="searchTerm" placeholder="Search Community...">
                </div>
                <div class="more-threads">
                    <h4>Threads you might be interested in reading.</h4>
                    <div class="community-card hover-fx">
                        <div>
                            <img class="community-thumb" src="<?php echo get_public_url('/images/overwhelm-article.png'); ?>" alt="Article Illustration">
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
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>" alt="Message Icon">6 comments</p>
                            </div>
                        </div>
                    </div>

                    <div class="community-card hover-fx">
                        <div class="community-card-info no-card-img">
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
                                <p><img class="message-icon" src="<?php echo get_public_url('/images/message-square.svg') ?>" alt="Message Icon">21 comments</p>
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