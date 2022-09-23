<?php
function settup_theme(){
	// Hỗ trợ thubmail
	add_theme_support('post-thumbnails');
	// Remove chiều cao, chiều rộng của hình ảnh trong bài viết
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
	add_filter('max_srcset_image_width', 'returnOne');
	function returnOne(){
		return 1;
	}
	// Thêm sidebar
	// if (function_exists('register_sidebar')){
	// 	register_sidebar(array(
	// 		'name'=> 'Cột phải',
	// 		'id' => 'sidebar',
	// 		'before_widget' => '<div class="widget">',
	// 		'after_widget'  => "</div></div>\n",
	// 		'before_title'  => '<h3 class="title-w"><span><i class="fa fa-bars"></i>',
	// 		'after_title'   => "</span></h3><div class='content-view'>\n",
	// 	));
	// }
	if (function_exists('register_sidebar')){
		register_sidebar(array(
		'name'=> 'Cột bên',
		'id' => 'sidebar',
	));
	}
	// Thêm menu
	register_nav_menus(
		array(
            'top_nav' => 'Top menu',
			'main_nav' => 'Main menu',
			'footer_nav' => 'Footer menu',

		)
	);
	// Hàm get đoạn mô tả bài viết
	function teaser($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'[...]';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt.'...';
	}
	// Hàm để tăng lượt xem sử dung trong file single.php
	function setpostview($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	    } else {
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}
	// Hàm hiển thị lượt xem
	function getpostviews($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	        return "1";
	    }
	    return $count;
	}
	// // add style và scirpt
// 	function add_theme_scripts() {
// 		wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'OwlCarousel2', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.carousel.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'OwlCarousel2-theme', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.theme.default.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
// 	  	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'owl', get_template_directory_uri() . '/libs/OwlCarousel2/owl.carousel.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
// 	}
// 	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
}
add_action('init','settup_theme');

function slider_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
             'thumbnail',
            
        ), //Các tính năng được hỗ trợ trong post type
        
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];
	   
		if(empty($first_img)){ //Defines a default image
		  $first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
		}
		return $first_img;
	  }
}
add_action('init', 'slider_post_type');
function precentSale($price, $priceSale){
	$sale = $priceSale *100 / $price;
	$precentSale = 100 - $sale;
	return number_format($precentSale,1);
}

function my_custom_wc_theme_support() {
    add_theme_support( 'woocommerce' );
}
//add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );
//add_action('woocommerce_after_shop_loop_item_title','change_loop_ratings_location', 2 );
// function change_loop_ratings_location(){
//     remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5 );
//     add_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 15 );
// };
// add_filter( 'woocommerce_product_get_rating_html', 'loop_product_get_rating_html', 20, 3 );
// function loop_product_get_rating_html( $html, $rating, $count ){
//     if ( 0 < $rating && ! is_product() ) {
//         global $product;
//         $rating_cnt = array_sum($product->get_rating_counts());
//         $count_html = '<div class="count-rating">' . $rating_cnt .'</div>';
//         $html       = '<div class="container-rating"><div class="star-rating">';
//         $html      .= wc_get_star_rating_html( $rating, $count );
//         $html      .= '</div>' . $count_html . '</div>';
//     }
//     return $html;
// }