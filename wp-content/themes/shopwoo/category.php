<?php get_header() ?>

<div id="content">

    <div class="container page">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="post-news">
                    <a href="#">
                        <h2 class="title-news"><?php single_cat_title()?></h2>
                    </a>
                    <div class="content-news">

                        <?php if( have_posts() ): ?>
                        <?php while( have_posts() ) : the_post(); ?>
                        <div class="news-detail">
                            <a
                                href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumnail', array( 'class' =>'thumnail') ); ?></a>
                            <div class="info-post">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h4>

                                <p><?php the_excerpt(); ?></p>
                                <!-- <div class="meta">
                                    <span class="lh2-date"><i class="fa fa-calendar "></i>
                                        <?php echo get_the_date('m/d/Y') ?></span>
                                </div> -->
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                        <!-- <div class="news-detail">
                            <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/post.jpg"
                                    alt="Bài viết mới nhất"></a>
                            <div class="info-post">
                                <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                <div class="meta">
                                    <span>Ngày đăng: 12-23-2016</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                    mollitia,
                                    dolore minus et eligendi quod perspiciatis placeat iure deleniti obcaecati
                                    blanditiis eius sit! Consectetur ullam praesentium deserunt ratione hic.</p>
                            </div>
                            <div class="clear"></div>
                        </div> -->

                    </div>
                    <?php if(paginate_links()!='') {?>
                    <div class="quatrang">
                        <?php
                        global $wp_query;
                        $big = 999999999;
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'prev_text'    => __('<'),
                            'next_text'    => __('>'),
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                            ) );
                        ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="sidebar">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>