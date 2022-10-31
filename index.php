<?php get_header(); ?>
<main>
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                <div class="container mt-5 pt-3">
                    <section class="maincontent">
                    <h1 class="h1-center mb-3"><?php the_title();?></h1>
                        <?php the_content(); ?>
                    </section>

                </div>
                <?php
            }
        }
        ?>
    </main>
    <?php get_footer(); ?>