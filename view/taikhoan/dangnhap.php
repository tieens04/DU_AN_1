<div class="boxtitle">ĐĂNG NHẬP</div>
            <div class="row boxcontent formtaikhoan">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                ?>
                    <form action="index.php?act=dangnhap" method="post">
                    
                    <div class="mb">
                    Tên đăng nhập
                    <input type="text" name="user" id="" value="<?=$user?>">
                    </div>

                    <div class="mb">
                    Mật khẩu
                    <input type="password" name="pass" id="" value="<?=$pass?>">
                    </div>

                    <div class="mb">
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
                    </div>

                    <div class="mb">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                    
                    </form> 
                    <li><a href="index.php?act=edit_taikhoan">Đổi mật khẩu</a></li>
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                
                <?php 
                    }else{
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    
                    <div class="mb">
                    Tên đăng nhập
                    <input type="text" name="user" id="">
                    </div>

                    <div class="mb">
                    Mật khẩu
                    <input type="password" name="pass" id="">
                    </div>

                    <div class="mb">
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
                    </div>

                    <div class="mb">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                    
                </form> 
                    <li><a href="#">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký</a></li>
                
                <?php }?>

                <h2 class="thongbao">
                <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>       
            </div>