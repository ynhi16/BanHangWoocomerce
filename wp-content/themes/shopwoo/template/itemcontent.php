<?php global $product; ?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="item-product">
        <div class="thumb">
            <a href="<?php the_permalink() ?>"><img
                    src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' )?>" alt=""></a>
            <?php// echo catch_that_image() ?>
            <?php if($product->is_on_sale()) {?>
            <span class="sale">Giảm
                <br><?php echo precentSale($product->get_regular_price(),$product->get_sale_price()) ?>%</span>
            <?php }?>
            <div class="action">
                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                    ngay</a>
                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                    thích</a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="info-product">
            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h4>
            <div class="price">
                <!-- <?php echo $product->get_price_html() ?> -->
                <span class="price-current"><?php echo $product->get_regular_price()?>₫</span>
                <?php if($product->is_on_sale()) {?>
                <span class="price-old"><?php echo $product->get_sale_price()?>₫</span>
                <?php }?>
            </div>
            <a href="<?php the_permalink() ?>" class="view-more">Xem chi tiết</a>

        </div>
    </div>
</div>