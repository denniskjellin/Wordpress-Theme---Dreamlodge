<?php
/*
Template Name: Blanc, grå bakgrund till innehåll
*/
?>
<?php get_header(); ?>
<main>
<div class="container mt-4 pt-3">
            <h1 class="h1-center font-xxl mb-2"><?php the_title();?></h1>
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                    <section class="p-2 br-sm bg-gray-light-1 mb-3">
                        <?php the_content(); ?>
                    </section>
                <?php
            }
        }
        ?>
        </div>
    </main>
<?php get_footer(); ?>