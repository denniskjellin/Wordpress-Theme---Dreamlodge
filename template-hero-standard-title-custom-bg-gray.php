<?php

/*
template name: Page grå med hero-img, titel custom
*/
?>

<?php get_header(); ?>
<div>
    <div class="hero-image" style="background-image: url(<?php header_image(); ?>">
        <div class="hero-text">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</div>
<!--content-->
<main>
    <div class="container mt-3 pt-3">
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                    <section class="p-2 br-sm bg-gray-light-1 mb-3 content mb-3">
                        <?php the_content(); ?>
                    </section>
                <?php
            }
        }
        ?>
        </div>
</main>
<?php get_footer(); ?>