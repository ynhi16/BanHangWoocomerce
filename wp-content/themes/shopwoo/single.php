<?php get_header() ?>
<!-- Get post News Query -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div id="content">
    <div class="container page">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>/category/tin-tuc">Tin tức </a>
            <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            <span class="name"> <?php the_title() ?></span>
        </div>
        <div class="module-news-detail">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-9">

                    <h2 class="title-news"><?php the_title() ?></h2>
                    <div class="meta_single">
                        <span class="lh2-date"><i class="fa fa-calendar "></i> Ngày đăng:
                            <?php echo get_the_date('l F j, Y') ?></span>
                        <span class="lh2-date"><i class="fa fa-eye"></i> Lượt xem:
                            <?php echo get_the_date('l F j, Y') ?></span>
                        <span class="author lh2-date"><i class="fa fa-user"></i>Tác giả: <?php the_author() ?></span>
                    </div>
                    <div>
                        <?php the_content() ?>
                    </div>
                    <a href=""><?php the_tags( 'Thẻ: ', ', ', '<br />' ); ?> </a>
                    <div class="mau2-share-7ncn">
                        <!-- <span> Chia sẻ: </span> -->
                        <span class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="standard"
                            data-action="like" data-size="small" data-share="true"></span>

                        <!-- <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="" target="_blank"><i class="fab fa-skype"></i></a> -->
                    </div>
                    <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5">
                    </div>
                    <div class="post_other">
                        <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) 
                        {
                            $category_ids = array();
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    
                            $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts'=>1
                            );
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) 
                            {
                                echo '<p>Bài viết liên quan</p><ul class="list-news">';
                                while ($my_query->have_posts())
                                {
                                    $my_query->the_post();
                                    ?>
                        <li>
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i><a
                                href="<?php the_permalink() ?>"><?php the_title() ?></a>

                        </li>
                        <?php
                                }
                                echo '</ul>';
                            }
                        }
                    ?>
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
</div>

<?php endwhile; else : ?>
<p>Không có</p>
<?php endif; ?>
<!-- Get post News Query -->
<?php get_footer()?>