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
            <section class="survey">
                <section>
                    <h1>Let's learn more about you.</h1>
                    <p>Take our 3-question survey and we’ll help you find a compatible mentor near you.</p>
                </section>
                <section class="survey-form">
                    <div class="tab main-obj">
                        <!-- <p>Step 1 of 3</p> -->
                        <div class="select-title">
                            <h2>What's your main objective right now?</h2>
                        </div>
                        <div class="radio-options">
                            <label for="get-hired">
                                <span>Get Hired</span>
                                <input oninput="this.className = ''" id="get-hired" type="radio" name="main-obj">
                            </label>
                            <label for="upskill">
                                <span>Upskilling and Growth</span>
                                <input oninput="this.className = ''" id="upskill" type="radio" name="main-obj">
                            </label>
                            <label for="network">
                                <span>Networking</span>
                                <input oninput="this.className = ''" id="network"" type="radio" name="main-obj">
                            </label>
                            <label for="transition">
                                <span>Career Transitioning</span>
                                <input oninput="this.className = ''" id="transition" type="radio" name="main-obj">
                            </label>
                            <label for="not-sure">
                                <span>Not Sure</span>
                                <input oninput="this.className = ''" id="not-sure" type="radio" name="main-obj">
                            </label>
                        </div>
                    </div>
                    <div class="tab">
                        <!-- <p>Step 2 of 3</p> -->
                        <div class="select-title">
                            <h2>Which topics are you interested in?</h2>
                        </div>
                        <div class="drop-options">
                            <select name="topics" id="topics">
                                <option value="front-end">Front-End Development</option>
                                <option value="back-end">Back-End Development</option>
                                <option value="full-stack">Full-Stack Development</option>
                                <option for="graphic-design">Graphic Design</option>
                                <option value="ui-design">UI Design</option>
                                <option value="ux-design">UX Design</option>
                                <option value="pm">Project Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab">
                        <!-- <p>Step 3 of 3</p> -->
                        <div class="select-title">
                            <h2>Where are you located?</h2>
                        </div>
                        <div class="drop-options">
                            <select name="location" id="location">
                                <option value="">Vancouver, BC</option>
                            </select>
                        </div>
                    </div>
                    <div class="progress-btns">
                        <div class="btn prev-btn">
                            <img src="https://img.icons8.com/material/256/long-arrow-left--v2.png" alt="">
                            <a href="<?php echo get_public_url('/pages/profile-page.php'); ?>" >Prev</a>
                        </div>
                        <div class="btn next-btn">
                            <a href="<?php echo get_public_url('/pages/results.php'); ?>" >Next</a>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>