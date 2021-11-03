<?php
/*
Template Name: Events
*/
?>

<?php 
get_header();
?>

    <section class="events_wrapper">
        <div class="container">
            <h2 class="text-center pb-5">A Simple Event Page</h2>
            <div class="row">

                <?php
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => 6,
                    );

                    $custom_posts_event = new WP_Query($args);
                    while($custom_posts_event->have_posts()){
                        $custom_posts_event->the_post();
                        ?>

                <div class="col-md-3">
                    <div class="card">
                        <?php the_post_thumbnail();?>
                            <div class="meta">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>
                                            <?php the_field('location');?>
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>
                                        <?php the_field('date');?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <div class="card-body">
                            <h2 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <p class="card-text"><?php the_excerpt();?></p>
                            <a href="#" class="btn btn-primary"><?php _e( "Go", "twentytwenty");?></a>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>



            </div>
        </div>
    </section>



<?php get_footer();?>