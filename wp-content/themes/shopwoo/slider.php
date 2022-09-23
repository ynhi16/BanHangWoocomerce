<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $i=0; ?>
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=slider'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php if($i==1) {?>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>"
                    alt="">
            </div>
            <?php } else {?>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' )?>"
                    alt="Second slide">
            </div>

            <?php } ?>
            <?php $i++; ?>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>


        </div>
        <a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>