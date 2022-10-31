<?php

/*
template name: Page vit med standard hero-img & text
*/
?>

<?php get_header(); ?>
<div>
    <div class="hero-image" style="background-image: url(<?php header_image(); ?>">
        <div class="hero-text">
            <h1>Dreamlodge</h1>
            <h2>boende & upplevelser i Sölden</h2>
        </div>
    </div>
</div>
<!--content-->
<main>
    <div class="container mt-3 pt-3">
            <h1 class="h1-center font-xxl mb-2"><?php the_title();?></h1>
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                    <section class="p-2 mb-3">
                        <?php the_content(); ?>
                    </section>
                <?php
            }
        }
        ?>
        </div>
</main>
<?php get_footer(); ?>