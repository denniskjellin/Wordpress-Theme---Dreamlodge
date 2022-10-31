<?php get_header(); ?>
<main>
    <!--news-->
    <div class="container mt-2 mb-3">
        <h1 class="h1-center mt-2 pt-5 font-xxl">Nyheter</h1>
        <div class="row gap-2 justify-start">
            
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    //If wanted, get name of author
                    $poster_name = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
                    // If post has or not have img, print anyway
                    {
            ?>
                        <div class="col-12-xs col-6-md col-4-lg mt-2">
                        <article class="p-2 br-sm bg-gray-light-1">
                                <!-- get title -->
                                <h3 class="font-lg"><?php the_title(); ?></h3>
                                <?php if (has_post_thumbnail()) {
                                    //get the post thumbnail -> sice given in class//
                                    the_post_thumbnail('post-img-medium', array('class' => 'img-full-width br-sm mt-1'));
                                }
                                // only if in vategory nyheter
                                if (in_category('nyheter')) {
                                    $post_date = get_the_date();
                                ?>
                                    <section>
                                        <!--header display none, validation purposes-->
                                        <h3 class="display-n">x</h3>
                                        <!--posted date-->
                                        <p class="mb-1">Postat - <?= $post_date; ?></p>
                                    </section>
                                <?php
                                }
                                ?>
                                <!--show minified text-->
                                <?php the_excerpt('100'); ?>
                                <!-- the permalink to read the post on single.php - full text, larger img-->
                                <a href="<?php the_permalink(); ?>" class="btn-standard">Läs mer</a>
                            </article>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <aside class="sidebar pl-2 pb-1 mt-2 pt-2 bg-primary-light-9">
        <h3 class="font-lg">Arkiv</h3>
        <ul>
            <?php
            //make a archive for posts, 10 per page//
            query_posts('category_name=nyheter&posts_per_page=10');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?> <!--title -> permalink to post -->
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                }
            }
            ?>
        </ul>
        <!--create pagination-->
        <div class="pagination pt-2">
            <div><?php next_posts_link('Äldre inlägg'); ?></div>
            <div><?php previous_posts_link('Nyare inlägg'); ?></div>
        </div>
    </aside>
</main>
<?php get_footer(); ?>