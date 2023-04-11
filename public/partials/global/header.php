<header>
    <div class="container">
        <!-- Logged In Header -->
        <div class="header-content grid">
            <a href="<?php echo get_public_url('/index.php'); ?>" title="Home" class="logo">
                <img src="<?php echo get_public_url('images/forward-logo-horizontal.svg'); ?>" alt="Forward Logo">
            </a>
        
            <nav>
                <ul class="global-nav">
                    <li class="flex-left"><a href="#" class="" title="Go to Community Hub">Community</a></li>
                    <li class="flex-left"><a href="<?php echo get_public_url('/pages/project-showcase.php'); ?>" class="" title="Project Showcase">Showcase</a></li>
                    <li><a href="<?php echo get_public_url('/pages/mentor-list.php'); ?>" class="header-btn" title="See List of Mentors">Mentors</a></li>
                    <img class="notification-icon" src="<?php echo get_public_url('images/notifications.svg'); ?>" alt="Notifications Bell">
                    <li>
                        <a href="<?php echo get_public_url('/pages/profile-page.php'); ?>" title="View User Profile"><img class="img-container" src="<?php echo get_public_url('images/dave-koo-profile-image.jpg'); ?>" alt=""></a>
                    </li>
                    <li class="username"><a href="<?php echo get_public_url('/pages/profile-page.php'); ?>">Dave Koo<img class="drop-icon" src="https://img.icons8.com/material/256/expand-arrow.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>