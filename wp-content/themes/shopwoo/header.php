<!DOCTYPE html>
<html lang="vi">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/child.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/responsive.css">
    <?php wp_head() ?>
</head>

<body>
    <div id="wallpaper">
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>Chào mừng đến với shop bán hàng!</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="top-menu">
                                <?php wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'top_nav', 
                                        'container' => 'false', 
                                        'menu_id' => 'top_nav', 
                                        'menu_class' => 'top_nav'
                                    ) 
                                ); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
                            <div class="logo">
                                <a href="<?php bloginfo('url') ?>"><img
                                        src="<?php bloginfo('template_directory')?>/images/logo.png" alt=""></a>
                                <h1>Website bán hàng</h1>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
                            <div class="form-seach-product">
                                <form action="/" method="GET" role="form">
                                    <select name="" id="input" class="form-control" required="required">
                                        <option value="">Chọn danh mục</option>

                                        <?php
                                            $args = array(
                                                'type'      => 'product',
                                                'parent'   => 0,
                                                'child_of'  => 0,
                                                'taxonomy' => 'product_cat',
                                                
                                            );
                                            $categories = get_categories( $args );
                                            foreach ( $categories as $category ) { ?>
                                        <?php $i =1 ?>
                                        <option value="<?php echo $i ?>"><?php echo $category->name ; ?></option>
                                        <?php $i++ ?>
                                        <?php } ?>
                                    </select>
                                    <div class="input-seach">
                                        <input type="text" name="s" id="" class="form-control">
                                        <button type="submit" class="btn-search-pro"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1"
                            style="text-align: right">
                            <a href="<?php bloginfo('url') ?>/gio-hang" class="icon-cart">
                                <div class="icon">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </div>
                                <div class="info-cart">
                                    <p>Giỏ hàng</p>
                                    <span><?php wc_cart_totals_subtotal_html(); ?></span>
                                </div>
                                <span class="clear"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-header">
                <div class="container">
                    <div id="nav-menu">
                        <?php wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'main_nav', 
                                        'container' => 'false', 
                                        'menu_id' => 'main_nav', 
                                        'menu_class' => 'main_nav'
                                    ) 
                                ); ?>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </header>