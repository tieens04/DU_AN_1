<section style="min-height: 85vh">
        <div class="header group">
            <div class="logo">
                <a href="index.php">
                    <img src="view/img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
                </a>
            </div> <!-- End Logo -->

            <div class="content">
                <div class="search-header" style="position: relative; left: 162px; top: 1px;">
                    <form class="input-search" method="post" action="index.php?act=timkiem">
                        <!-- <div class="autocomplete"> -->
                            <input name="kyw" autocomplete="on" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                                <!-- <i class="fa fa-search"></i>
                                Tìm kiếm
                            </button> -->
                        <!-- </div> -->
                    </form> <!-- End Form search -->
                    <div class="tags">
                        <strong>Từ khóa: </strong>
                        <!-- <a href="index.html?search=Samsung">Samsung</a>
                        <a href="index.html?search=iPhone">iPhone</a>
                        <a href="index.html?search=Huawei">Huawei</a>
                        <a href="index.html?search=Oppo">Oppo</a>
                        <a href="index.html?search=Mobi">Mobi</a> -->
                        <?php
                        foreach ($dsdm_header as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=dssanpham&iddm=" . $id;
                        echo '<a href="' . $linkdm . '">' . $name . '</a>';
                    }
                    ?>
                    </div>
                </div> <!-- End Search header -->

                <div class="tools-member">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                ?>

                    <div class="member">
                        <a><i class="fa fa-user"></i><?=" ".$user?></a>
                        <div class="menuMember">
                            <a href="index.php?act=edit_taikhoan">Trang người dùng</a>
                            <a href="index.php?act=thoat">Đăng xuất</a>
                        </div>
                    </div>                        

                <?php
                    }else{
                ?> 
                <div class="member">
                    <div class="member js-signin-modal-trigger">
			            <!-- <a href="index.php?act=dangnhap"><i class="fa fa-user"></i>Tài khoản</a> -->
			            <!-- Trigger/Open The Modal -->
			            <a data-signin="login"><i class="fa fa-user"></i> Tài khoản</a>
                    </div> 
		            <!-- ehjwew,ajfva -->

                    <div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
                        <div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
                            <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
                                <li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
                                <li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
                            </ul>

                            <div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
                                <form class="cd-signin-modal__form" action="index.php?act=dangnhap" method="post">
                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signin-username">Username</label>
                                        <input name="user" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-username" type="text" placeholder="Username" required>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
                                        <input name="pass" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="text"  placeholder="Password" required>
                                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password" style="font-family: Arial, Helvetica, sans-serif; font-size: 0.9vw;">Hide</a>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
                                        <label for="remember-me">Remember me</label>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <input name="dangnhap" class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Đăng nhập">
                                    </p>
                                </form>
                                
                                <p class="cd-signin-modal__bottom-message"><a href="index.php?act=quenmk">Quên mật khẩu?</a></p>
                            </div> <!-- cd-signin-modal__block -->

                            <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
                                <form class="cd-signin-modal__form" action="index.php?act=dangky" method="post">
                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Username</label>
                                        <input name="user" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username" required>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                                        <input name="email" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail" required>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
                                        <input name="pass" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="text"  placeholder="Password" required>
                                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password" style="font-family: Arial, Helvetica, sans-serif; font-size: 0.9vw;">Hide</a>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
                                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                                    </p>

                                    <p class="cd-signin-modal__fieldset">
                                        <input name="dangky" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Đăng ký">
                                    </p>
                                </form>
                            </div> <!-- cd-signin-modal__block -->

                            
                            
                        </div> <!-- cd-signin-modal__container -->
                    </div>
                </div>            
                <?php }?>
                 
                    <div class="cart">
                        <a href="view/giohang.php">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Giỏ hàng</span>
                            <span class="cart-number"></span>
                        </a>
                    </div> <!-- End Cart -->

                    <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div> -->
                </div><!-- End Tools Member -->
            </div> <!-- End Content -->
        </div>