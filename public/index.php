<?php
    require('../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_path('public/partials/global/head.php'));  ?> 
    <body>
        <?php 
            require(get_path('public/partials/global/header-no-user.php'));
        ?>
        <main>
            <section class="banner grid">
                <div class="col-7">
                    <h1>Forward</h1>
                    <p class="text-lg">Keep moving Forward!!</p>
                    <p>Built by mentees, for mentors & peers. Forward helps local tech industry professionals and new-comers build communities and connections with each other.</p>
                    <div class="banner-btns">
                        <div class="btn"><a href="<?php echo get_public_url('/pages/login.php'); ?>" title="Sign Up" class="">Get started &rarr;</a></div>
                        <div class="btn-secondary"><a href="<?php echo get_public_url('/pages/login.php'); ?>" title="Sign Up" class="">Learn about Forward</a></div>
                    </div>
                </div>
                <img src="<?php echo get_public_url('/images/hero-banner.jpg'); ?>" alt="Two women looking at a laptop screen" class="col-5">
            </section>
            <section class="features">
                <ul class="grid">
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/people-icon.svg'); ?>" alt="people icon">
                        <p>Browse our list of expert mentors and apply</p>
                    </li>
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/work-icon.svg'); ?>" alt="work icon">
                        <p>Post your best work on our project showcase to get feedback and connect with fellow peers and mentors</p>
                    </li>
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/question-icon.svg'); ?>" alt="Question icon">
                        <p>Don't know where to start? Take our survey to get matched with local mentors to help kickstart your journey!</p>
                    </li>
                </ul>
            </section>
            <section class="testimonials">
                <ul class="grid">
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/mentee-1.jpg'); ?>" alt="smiling woman">
                            <p>Rachel Garcia</p>
                        </div>
                        <p>I love mentoring because it feels amazing to see my mentees succeed. I was thrilled to be able to mentor a young coder through this mentorship program. It was an incredibly rewarding experience to be able to share my knowledge and expertise with someone who was just starting out in the field.</p>
                    </li>
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/mentor-1.jpg'); ?>" alt="Smiling man">
                            <p>Benjamin Moreno</p>
                        </div>
                        <p>I felt so lost during my job search, I felt like I had no one to turn to. But with Forward, I was matched with a mentor that helped me gain back my confidence and encouraged me to not feel discouraged. They also gave me honest feedback on my work, challenged me to push my boundaries, and supported me every step of the way.</p>
                    </li>
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/mentee-2.jpg'); ?>" alt="Smiling Man">
                            <p>Elijah Kingston</p>
                        </div>
                        <p>I learned the latest design tools and techniques, gained valuable industry insights, and built a strong portfolio that showcased my skills and experience. Thanks to my mentor's guidance and support, I was able to land my dream job as a UI/UX designer, and I haven't looked back since.</p>
                    </li>
                </ul>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>