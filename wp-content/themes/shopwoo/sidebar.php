<div class="sidebar">
    <div class="category-box">
        <h3>Danh mục sản phẩm</h3>
        <div class="content-cat">
            <ul>
                <?php
                $args = array(
                    'type'      => 'product',
                    'parent'   => 0,
                    'child_of'  => 0,
                    'taxonomy' => 'product_cat',
                    
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) { ?>

                <li><i class="fa fa-angle-right"></i> <a
                        href=" <?php echo get_term_link($category->slug, 'product_cat'); ?>">
                        <?php echo $category->name ; ?></a></li>
                <?php } ?>

                <!-- <li><i class="fa fa-angle-right"></i> <a href="#">Điện thoại</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Máy tính bảng</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">laptop</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Apple</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Đồng hồ thông minh</a>
                </li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Thiết bị đeo tay</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Camera</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Tivi</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Sản phẩm khác</a></li> -->
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3>
            <i class="fa fa-bars"></i>
            Tin tức
        </h3>
        <div class="content-w">
            <ul>
                <?php 
                    $args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => 73
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>"><img
                            src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' )?>" alt=""></a>
                    <h4><a href="<?php the_permalink()?>"><?php the_title() ?></a>
                    </h4>
                    <div class="clear"></div>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>


                <!-- <li>
                    <a href="#"><img src="images/news.jpg" alt=""></a>
                    <h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a>
                    </h4>
                    <div class="clear"></div>
                </li> -->

            </ul>
        </div>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?><?php endif; ?>
    <!-- <div class="widget">
        <h3>
            <i class="fa fa-bars"></i>
            Quảng cáo
        </h3>
        <div class="content-banner">
            <a href="#">
                <img src="images/banner.png" alt="">
            </a>
        </div>
    </div>
    <div class="widget">
        <h3>
            <i class="fa fa-facebook"></i>
            Facebook
        </h3>
        <div class="content-fb">
            <div class="fb-page" data-href="https://www.facebook.com/huykiradotnet/" data-tabs="timeline" data-width=""
                data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                data-show-facepile="true">
            </div>
        </div>
    </div> -->
</div>