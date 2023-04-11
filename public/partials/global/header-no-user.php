<header>
    <!-- Logged Out Header -->
    <div class="header-content grid">
    <a href="<?php echo get_public_url('/index.php'); ?>" title="Home" class="logo">
            <img src="<?php echo get_public_url('images/forward-logo-horizontal.svg'); ?>" alt="Forward Logo">
        </a>
        <nav>
            <ul class="global-nav">
                <li><a href="<?php echo get_public_url('/index.php'); ?>" title="Go to Home">Home</a></li>
                <li><a href="#" title="Go to About">About</a></li>
                <li><a href="#" title="Contact Us">Contact</a></li>
                <li class="nav-btn-secondary"><a href="<?php echo get_public_url('/pages/login.php'); ?>" title="Login to Your Account">Login</a></li>
                <li class="nav-btn"><a href="#" title="Create an Account">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>