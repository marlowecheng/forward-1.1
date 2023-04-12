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
                    </div>
                </div>
            </section>
            <section class="no-margin thread-comments">
                <div class="">
                    
                </div>
            </section>
            <section class="no-margin thread-side">
                <div class="filter-search-bar">
                    <input type="text" class="searchTerm" placeholder="Search Community...">
                </div>
                <div class="more-threads">
                    
                </div>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>