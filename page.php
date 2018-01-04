<?php get_header(); ?>


    <div class="container">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <div class="post-body">

                <?php the_content(); ?>


                    <div class="clearfix"></div>
            </div>
            <?php endwhile; endif; ?>

                <!-- Example row of columns -->

                <?php get_comments(); ?>


                    <h6>Posted on <?php the_time('Y-d-m') ?></h6>
                    <hr>


    </div>




    <?php get_footer(); ?>
