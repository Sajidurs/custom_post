<?php get_header();?>


    
<section class="events_single_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cards">
                        <?php the_post_thumbnail();?>
                        <h3 class="text-center"><?php the_title();?></h2>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>