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
                <div class="col-6 banner-left">
                    <h1>Dedicated mentors to keep you moving Forward</h1>
                    <p>Built by mentees, for mentors & peers. Forward helps local tech industry professionals and new-comers build communities and connections with each other.</p>
                    <div class="banner-btns">
                        <div class="btn"><a href="<?php echo get_public_url('/pages/login.php'); ?>" title="Sign Up" class="">Get started</a></div>
                        <div class="btn-secondary"><a href="<?php echo get_public_url('/pages/login.php'); ?>" title="Sign Up" class="">Learn about Forward &rarr;</a></div>
                    </div>
                </div>
                <div class="col-6 banner-right">
                    <img src="<?php echo get_public_url('/images/hero-banner.jpg'); ?>" alt="Two women looking at a laptop screen" class="col-5">
                </div>
            </section>
            <span class="border-line"></span>
            <section class="features">
                <h1>Get Started with Forward</h1>
                <ul class="grid">
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/Icons/clarity-blocks.svg'); ?>" alt="clarity block icon">
                        <p>Browse our list of local expert mentors within your community and receive guidance</p>
                    </li>
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/Icons/clarity-faq.svg'); ?>" alt="clarity faq icon">
                        <p>Don't know where to start? Take our survey to get matched with local mentors to help kickstart your journey!</p>
                    </li>
                    <li class="col-4">
                        <img src="<?php echo get_public_url('/images/Icons/clarity-feedback.svg'); ?>" alt="clarity feedback icon">
                        <p>Post your best work on our project showcase to get feedback and connect with fellow peers and mentors</p>
                    </li>
                </ul>
            </section>
            <span class="border-line"></span>
            <section class="testimonials">
                <h1>Here's what our users have to say</h1>
                <ul class="grid">
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/Icons/clarity-quote.svg'); ?>" alt="clarity quote icon">
                        </div>
                        <p>I love mentoring because it feels amazing to see my mentees succeed. I was thrilled to be able to mentor a young coder through this mentorship program. It was an incredibly rewarding experience to be able to share my knowledge and expertise with someone who was just starting out in the field.</p>
                        <div class="testimonial-user">
                            <div>
                                <img class="testimonial-img-icon" src="<?php echo get_public_url('/images/mentee-1.jpg'); ?>" alt="smiling woman">
                            </div>
                            <div class="testimonial-user-info">
                                <p>Rachel Garcia</p>
                                <p>Mentee</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/icons/clarity-quote.svg'); ?>" alt="clarity quote icon">
                        </div>
                        <p>I felt so lost during my job search, I felt like I had no one to turn to. But with Forward, I was matched with a mentor that helped me gain back my confidence and encouraged me to not feel discouraged. They also gave me honest feedback on my work, challenged me to push my boundaries, and supported me every step of the way.</p>
                        <div class="testimonial-user">
                            <div>
                                <img class="testimonial-img-icon" src="<?php echo get_public_url('/images/mentor-1.jpg'); ?>" alt="smiling man">
                            </div>
                            <div class="testimonial-user-info">
                                <p>Benjamin Moreno</p>
                                <p>Mentee</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-4">
                        <div>
                            <img src="<?php echo get_public_url('/images/icons/clarity-quote.svg'); ?>" alt="clarity quote icon">
                        </div>
                        <p>I learned the latest design tools and techniques, gained valuable industry insights, and built a strong portfolio that showcased my skills and experience. Thanks to my mentor's guidance and support, I was able to land my dream job as a UI/UX designer, and I haven't looked back since.</p>
                        <div class="testimonial-user">
                            <div>
                                <img class="testimonial-img-icon" src="<?php echo get_public_url('/images/mentee-2.jpg'); ?>" alt="smiling man">
                            </div>
                            <div class="testimonial-user-info">
                                <p>Elijah Kingston</p>
                                <p>Mentee</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>