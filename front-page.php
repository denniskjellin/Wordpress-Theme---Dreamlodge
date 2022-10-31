<?php get_header(); ?>
<!--Hero section-->
<div>
    <div class="hero-image" style="background-image: url(<?php header_image(); ?>">
        <div class="hero-text">
            <h1>Dreamlodge</h1>
            <h2>Boende & upplevelser i Sölden</h2>
        </div>
    </div>
</div>
<!--content-->
<main>
    <!--container for content-->
    <div class="container mt-4">
        <section class="maincontent">
            <?php the_content(); ?>
        </section>
    </div>
<!--activate widget-->
    <?php
    if (is_active_sidebar('start-puff-section')) : ?>
        <div id="start-puff-section">
            <section class="bg-primary-light-9 pt-2 pb-2">
                <div class="container">
                    <?php dynamic_sidebar('start-puff-section'); ?>
                </div>
            </section>
        </div>
    <?php endif; ?>

    <!--news section-->
    <section class="container mt-2 mb-3">
        <h3 class="h1-center mb-1 mt-2 pt-2 font-xl">Senaste nytt</h3>
        <div class="row gap-1">
            <?php
            // läs ut max 3 poster
            query_posts('category_name=nyheter&posts_per_page=3');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    // write out post
                    {
            ?>
                        <div class="col-12-xs col-6-md col-4-lg">
                            <article class="p-2 br-sm bg-gray-light-1">
                                <!-- get title -->
                                <h3 class="font-lg"><?php the_title(); ?></h3>
                                <?php the_post_thumbnail('post-img-medium', array('class' => 'img-full-width br-sm mt-1 mb-1'));
                                    //check if in category
                                if (in_category('nyheter')) {
                                    //post date
                                    $post_date = get_the_date();
                                ?>
                                    <section>
                                        <p class="mb-1">Postat - <?= $post_date; ?></p>
                                    </section>
                                <?php
                                }
                                ?>
                                <!-- shortening the text-->
                                <?php the_excerpt('100'); ?>
                                <a href="<?php the_permalink(); ?>" class="btn-standard">Läs mer</a>
                            </article>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>