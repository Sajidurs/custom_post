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
                        'posts_per_page' => 3,
                    );

                    $custom_posts_event = new WP_Query( $args );
                    while($custom_posts_event->have_posts()){
                        ?>

                <div class="col-md-3">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="meta">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Dhaka</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Dhaka</h4>
                                    </div>
                                </div>
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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