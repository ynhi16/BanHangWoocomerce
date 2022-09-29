<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="box-footer info-contact">
                    <h3>Thông tin liên hệ</h3>
                    <div class="content-contact">
                        <p>Website chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
                        <p>
                            <strong>Địa chỉ:</strong> 457/44 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng
                        </p>
                        <p>
                            <strong>Email: </strong> thietkeweb43.com@gmail.com
                        </p>
                        <p>
                            <strong>Điện thoại: </strong> 0358949xxx
                        </p>
                        <p>
                            <strong>Website: </strong> https://huykira.net
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="box-footer info-contact">
                    <h3>Thông tin khác</h3>
                    <div class="content-list">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách bảo mật</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách đổi trả</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Phí vẫn chuyển</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Hướng dẫn thanh toán</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Chương trình khuyến mãi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="box-footer info-contact">
                    <!-- <h3>Form liên hệ</h3> -->
                    <!-- <div class="content-contact">
                        <form action="/" method="GET" role="form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" name="" id="" class="form-control" placeholder="Họ và Tên">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <input type="email" name="" id="" class="form-control" placeholder="Địa chỉ mail">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <input type="text" name="" id="" class="form-control" placeholder="Số điện thoại">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" name="" id="" class="form-control" placeholder="Tiêu đề">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-contact">Liên hệ ngay</button>
                        </form>
                    </div> -->
                    <?php echo do_shortcode('[contact-form-7 id="11" title="Form liên hệ 1"]');?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="copyright">
        <p>Copyright © 2020 HKSHOP All Rights Reserved - Design by THIETKEWEB43.COM</p>
    </div> -->
</footer>
</div>
<script src="<?php bloginfo('template_directory')?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
    nonce="0vDk8fvv"></script>
<!-- <script>
jQuery(function($) {
    $('.woocommerce').on('change', 'input.qty', function() {
        $("[name='update_cart']").trigger("click");
    });
});
</script> -->
<?php wp_footer() ?>
</body>

</html>