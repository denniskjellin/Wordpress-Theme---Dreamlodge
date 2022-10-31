<?php get_header(); ?>
<main>
    <?php
    //get posts
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            //if wanted, I can activate author presenation for posts
            $poster_name = get_the_author_meta('first_name') . " " . get_the_author_meta('last_name');
    ?>
            <!-- set up container with grid system -->
            <div class="container">
                <div class="row justify-center">
                    <div class="col-12-xs col-8-md">
                    <h1 class="h1-center mb-3 mt-2 pt-5 font-xxl"><?php the_title(); ?></h1>
                        <section class="p-2 br-sm bg-gray-light-1 mb-3">
                          <h3 class="display-n">x</h3>
                            <?php
                            // Is there any img?
                            if (has_post_thumbnail()) {
                                if (in_category('nyheter')) {
                                    the_post_thumbnail('post-img-large', array('class' => 'br-sm img-full-width mb-1'));
                                } else {
                                    the_post_thumbnail();
                                }
                            }
                            if (in_category('nyheter')) {
                                //Post date
                                $post_date = get_the_date();
                            ?>
                                 <section>
                                        <p class="mb-1">Postat av <?=$poster_name;?>, <?= $post_date; ?></p>
                                    </section>
                            <?php
                            }
                            // write out content if there is content
                            the_content();
                            ?>
                            
                        </section>
                    </div>
                </div>
                
            </div>
    <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>