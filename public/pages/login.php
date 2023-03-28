<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_path('public/partials/global/head.php'));  ?> 
    <body>
        <?php 
            require(get_path('public/partials/global/header-no-user.php'));
        ?>
        <main>
            <section class="login grid">
                <h1>Login to Forward</h1>
                <div class="container">
                    <div class="login-container">
                        <div class="login-form">
                            <form action="">
                                <div class="form-input">
                                    <label for="email">Email</label>
                                    <input type="text" name="email">
                                </div>
                                <div class="form-input">
                                    <label for="password">Password</label>
                                    <input type="password" name="password">
                                </div>
                            </form>
                            <div class="btn"><a href="<?php echo get_public_url('/pages/profile-page.php'); ?>">Login</a></div>
                        </div>
                        <div class="login-links">
                            <p><a href="#">Forgot your password?</a></p>
                            <p>First time? <a href="">Register.</a></p>
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