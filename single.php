<?php get_header(); ?>





    <div class="container">


        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>
                    <div class="post-body">
                        <?php the_content(); ?>
                            <?php endwhile; else: ?>
                                <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
                                    <?php endif; ?>
                    </div>
            </div>

            <hr/>
        </div>



        <div class="row">

            <div class="col-md-6 col-md-offset-1">
                <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
            </div>
        </div>

        <hr>

    </div>
    <!--    </div>-->

    <?php get_footer();?>
