<div class="banner">
            <div class="owl-carousel owl-theme">
                <img id="banner" src="view/img/banners/banner1.png" alt="">
            </div>
        </div>

        <!-- <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot active"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
        </div> -->
        <img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
        <br>
        <div class="companyMenu group flexContain">
            <a href="index.html?company=Apple"><img src="view/img/company/Apple.jpg"></a><a
                href="index.html?company=Samsung"><img src="view/img/company/Samsung.jpg"></a><a
                href="index.html?company=Oppo"><img src="view/img/company/Oppo.jpg"></a><a
                href="index.html?company=Nokia"><img src="view/img/company/Nokia.jpg"></a><a
                href="index.html?company=Huawei"><img src="view/img/company/Huawei.jpg"></a><a
                href="index.html?company=Xiaomi"><img src="view/img/company/Xiaomi.png"></a><a
                href="index.html?company=Realme"><img src="view/img/company/Realme.png"></a><a
                href="index.html?company=Vivo"><img src="view/img/company/Vivo.jpg"></a><a
                href="index.html?company=Philips"><img src="view/img/company/Philips.jpg"></a><a
                href="index.html?company=Mobell"><img src="view/img/company/Mobell.jpg"></a><a
                href="index.html?company=Mobiistar"><img src="view/img/company/Mobiistar.jpg"></a><a
                href="index.html?company=Itel"><img src="view/img/company/Itel.jpg"></a><a
                href="index.html?company=Coolpad"><img src="view/img/company/Coolpad.png"></a><a
                href="index.html?company=HTC"><img src="view/img/company/HTC.jpg"></a><a
                href="index.html?company=Motorola"><img src="view/img/company/Motorola.jpg"></a>
        </div>


        <div class="flexContain" id="myTopnav">

            <div class="pricesRangeFilter dropdown">
                <button class="dropbtn">Giá tiền</button>
                <div class="dropdown-content">
                    <a href="#">Dưới 2 triệu</a>
                    <a href="#">Từ 2 - 4 triệu</a>
                    <a href="#">Từ 4 - 7 triệu</a>
                    <a href="#">Từ 7 - 13 triệu</a>
                    <a href="#">Trên 13 triệu</a>
                </div>
            </div>

            <div class="promosFilter dropdown">
                <button class="dropbtn">Khuyến mãi</button>
                <div class="dropdown-content">
                    <a href="#">Giảm giá</a>
                    <a href="#">Trả góp</a>
                    <a href="#">Mới ra mắt</a>
                    <a href="#">Giá rẻ online</a>
                </div>
            </div>

            <div class="starFilter dropdown">
                <button class="dropbtn">Số lượng sao</button>
                <div class="dropdown-content">
                    <a href="#">Trên 2 sao</a>
                    <a href="#">Trên 3 sao</a>
                    <a href="#">Trên 4 sao</a>
                </div>
            </div>

            <div class="sortFilter dropdown">
                <button class="dropbtn">Sắp xếp</button>
                <div class="dropdown-content">
                    <a href="#">Giá tăng dần</a>    
                    <a href="#">Giá giảm dần</a>    
                    <a href="#">Sao tăng dần</a></li>
                    <a href="#">Sao giảm dần</a>    
                    <a href="#">Đánh giá tăng dần</a>   
                    <a href="#">Đánh giá giảm dần</a>   
                    <a href="#">Từ A-Z</a>  
                    <a href="#">Từ Z-A</a>
                </div>
            </div>

        </div> <!-- End khung chọn bộ lọc -->

        <div class="choosedFilter flexContain">
            <a id="deleteAllFilter" style="display: none;">
                <h3>Xóa bộ lọc</h3>
            </a>
        </div> <!-- Những bộ lọc đã chọn -->
        <hr>

        <!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
        <div class="contain-products" style="display:none">
            <div class="filterName">
                <input type="text" placeholder="Lọc trong trang theo tên...">
            </div> <!-- End FilterName -->

            <ul id="products" class="homeproduct group flexContain">
                <div id="khongCoSanPham">
                    <i class="fa fa-times-circle"></i>
                    Không có sản phẩm nào
                </div> <!-- End Khong co san pham -->
            </ul><!-- End products -->

            <div class="pagination"></div>
        </div>

        <!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
        <div class="contain-khungSanPham">
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">*
                    NỔI BẬT
                    NHẤT *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #42bcf4 0%, #004c70 50%, #42bcf4 100%);">*
                    SẢN PHẨM
                    MỚI *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">*
                    TRẢ GÓP
                    0% *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #5de272 0%, #007012 50%, #5de272 100%);">*
                    GIÁ SỐC
                    ONLINE *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">*
                    GIẢM GIÁ
                    LỚN *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
            <div class="khungSanPham" style="border-color: #ff9c00">
                <h3 class="tenKhung"
                    style="background-image: linear-gradient(120deg, #5de272 0%, #007012 50%, #5de272 100%);">*
                    GIÁ RẺ
                    CHO MỌI NHÀ *</h3>
                <div class="listSpTrongKhung flexContain">
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Nokia-black-future">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                                alt="">
                            <h3>Nokia black future</h3>
                            <div class="price">
                                <strong>999.999.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>9999 đánh giá</span>
                            </div>
                            <label class="giamgia">
                                <i class="fa fa-bolt"></i> Giảm 1.000₫
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Huawei-Nova-2i">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg"
                                alt="">
                            <h3>Huawei Nova 2i</h3>
                            <div class="price">
                                <strong>3.990.000₫</strong>
                                <span>4.490.000₫</span>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>804 đánh giá</span>
                            </div>
                            <label class="giareonline">
                                Giá rẻ online
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-Note-5">
                            <img src="view/img/products/xiaomi-redmi-note-5-pro-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi Note 5</h3>
                            <div class="price">
                                <strong>5.690.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>372 đánh giá</span>
                            </div>
                            <label class="moiramat">
                                Mới ra mắt
                            </label>
                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Xiaomi-Redmi-5-Plus-4GB">
                            <img src="view/img/products/xiaomi-redmi-5-plus-600x600.jpg" alt="">
                            <h3>Xiaomi Redmi 5 Plus 4GB</h3>
                            <div class="price">
                                <strong>4.790.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-o"></i><span>347 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="sanPham">
                        <a href="chitietsanpham.html?Itel-it2123">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                                alt="">
                            <h3>Itel it2123</h3>
                            <div class="price">
                                <strong>160.000₫</strong>
                            </div>
                            <div class="ratingresult">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i><span>302 đánh giá</span>
                            </div>

                            <div class="tooltip">
                                <button class="themvaogio">
                                    <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                                    +
                                </button>
                            </div>
                        </a>
                    </li>
                </div>
                <a class="xemTatCa" href="index.html?star=3;sort=rateCount-decrease" style="	border-left: 2px solid #ff9c00;
					border-right: 2px solid #ff9c00;">
                    Xem tất cả 39 sản phẩm
                </a>
            </div>
        </div>

    </section> <!-- End Section -->