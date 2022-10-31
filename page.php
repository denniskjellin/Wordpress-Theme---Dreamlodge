<?php get_header(); ?>
<!--new pages template-->
<main>
<div class="container mt-4 pt-3">
    <!--get title-->
            <h1 class="h1-center font-xxl mb-2"><?php the_title();?></h1>
        <?php
        if(have_posts()) {
            while(have_posts()) {
                //write out posts
                the_post();
                ?>
                    <section class="maincontent mb-3">
                        <!--write out content-->
                        <?php the_content(); ?>
                    </section>
                <?php
            }
        }
        ?>
        </div>
    </main>
    <?php get_footer(); ?>