<?php get_header(); ?>




    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/mac3.jpg">

        <div class="page-jumbotron">

            <h1> <?php bloginfo('name'); ?></h1>

        </div>

    </div>




    <div class="container page">



        <div class="row ">
            <div class="col-md-8 blog-main">



                <?php if ( have_posts() ) : ?>

                    <!-- Add the pagination functions here. -->

                    <!-- Start of the main loop. -->
                    <?php while ( have_posts() ) : the_post();  ?>

                        <div class="single-entry">
                            <!-- the rest of your theme's main loop -->
                            <h1><?php the_title(); ?></h1>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>

                            </div>

                            <a class="btn btn-sm btn-dark" href="<?php the_permalink(); ?>">
                                <i class="fa fa-trash-o"> </i>More </a>

                            <h6>Posted on <?php the_time('Y-d-m') ?></h6>
                            <hr>
                        </div>

                        <?php endwhile; ?>
                            <!-- End of the main loop -->

                            <!-- Add the pagination functions here. -->

                            <div class="nav-previous alignleft">
                                <?php next_posts_link( 'Older posts' ); ?>
                            </div>
                            <div class="nav-next alignright">
                                <?php previous_posts_link( 'Newer posts' ); ?>
                            </div>

                            <?php else : ?>
                                <p>
                                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                                </p>
                                <?php endif; ?>


            </div>


            <div class="col-md-3 col-md-offset-1 blog-sidebar m-b-lg ">
                <div class="p-l-md">

                    <?php get_sidebar(); ?>
                </div>
            </div>


        </div>





    </div>



    <?php get_footer(); ?>
