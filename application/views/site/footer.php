            <footer id="footer" class="nostylingboxs">
                <div class="footer-center" id="pavo-footer-center">
                    <div class="container">
                        <div class="container-inner">
                            <div class="inside">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Thông tin</h5>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/about_us">Về chúng tôi</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/delivery">Thông tin giao hàng</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/privacy">Chính sách bảo mật</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/terms">Điều Khoản</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-12 column">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Thông tin thêm</h5>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/thuong-hieu">Thương hiệu</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/phieu-qua-tang">Phiếu Quà tặng</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/index.php?route=affiliate/account">Cộng tác viên</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/san-pham-giam-gia">Sản phẩm Đặc biệt</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Tài khoản</h5>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/index.php?route=account/account">Tài khoản</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/index.php?route=account/order">Lịch sử đơn hàng</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/index.php?route=account/wishlist">Danh sách Yêu thích</a>
                                            </li>
                                            <li><i class="fa fa-angle-right"></i><a href="http://shopstars.myzozo.net/index.php?route=account/newsletter">Đăng ký nhận tin</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 column">
                                        <div class="pav-newsletter" id="newsletter_1527093039">
                                            <form id="formNewLestter1527093039" method="post" class="formNewLestter">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Đăng ký nhận tin</h3>
                                                </div>
                                                <div class="description">
                                                    <p>Đăng ký email để nhanh chóng nhận được các thông báo về khuyến mại, chương trình giảm giá của chúng tôi</p>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" placeholder="Email..." class="form-control email" name="email" id="email" />
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="submitNewsletter" class="btn btn-primary radius-6x space-left-10" value="Đăng ký!">
                                                            Đăng ký! </button>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="1" name="action" />
                                                <div class="valid"></div>
                                            </form>
                                            <ul class="list-inline">
                                                <li><a href="https://twitter.com/zozo_vn"><i class="icons icons-sm fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/www.zozo.vn"><i class="icons icons-sm fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="https://plus.google.com/u/0/105273461385439624071"><i class="icons icons-sm fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="https://www.youtube.com/channel/UC-lDtAPrOj77xWIGdACVLAA"><i class="icons icons-sm fa fa-youtube"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icons icons-sm fa fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <script type="text/javascript">
                                            <!--
                                            $(document).ready(function() {
                                                var id = 'newsletter_1527093039';
                                                $('#' + id + ' .box-heading').bind('click', function() {
                                                    $('#' + id).toggleClass('active');
                                                });

                                                $('#formNewLestter1527093039').on('submit', function() {
                                                    var email = $('#formNewLestter1527093039 .email').val();

                                                    $(".success_inline, .warning_inline, .error").remove();
                                                    if (!isValidEmailAddress(email)) {
                                                        $('.valid').html("<div class=\"error alert alert-danger\">Email không hợp lệ<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div></div>");
                                                        $('.email').focus();
                                                        return false;
                                                    }

                                                    var url = "index.php?route=tool/newsletter";
                                                    $.ajax({
                                                        type: "post",
                                                        url: url,
                                                        data: $("#formNewLestter1527093039").serialize(),
                                                        dataType: 'json',
                                                        success: function(json) {
                                                            $(".success_inline, .warning_inline, .error").remove();
                                                            if (json['error']) {
                                                                $('.valid').html("<div class=\"warning_inline alert alert-danger\">" + json['error'] + "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div>");
                                                            }
                                                            if (json['success']) {
                                                                $('.valid').html("<div class=\"success_inline alert alert-success\">" + json['success'] + "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button></div>");
                                                            }
                                                        }
                                                    });
                                                    return false;

                                                }); //end submmit
                                            }); //end document

                                            function isValidEmailAddress(emailAddress) {
                                                    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                                                    return pattern.test(emailAddress);
                                                }
                                                -->
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
