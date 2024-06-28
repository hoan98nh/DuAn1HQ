
<div class="row mb">
    <div class="boxtitle">Tài Khoản</div>

        <div class="boxcontent formtaikhoan">
            <?php
                if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
            
            <div class="row mb10"> Xin chào <?= $user?></div>
                                
                <div class="row mb10">
                <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>

                <li>
                <a href="index.php?act=edit_taikhoan">Cập nhật thông tin tài khoản</a>
                </li>

                <li>
                <a href="admin/index.php">Đăng nhập admin</a>
                </li>

                <li>
                <a href="index.php?act=thoat">Thoát</a>
                </li>
                </div>
                </div>

                <?php
                } else {                      
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                            Tên đăng nhập
                        <input type="text" name="user" > 
                        </div>
                                
                        <div class="row mb10">
                            Mật khẩu <br>
                        <input type="password" name="pass" > 
                        </div>
                                
                        <div class="row mb10"> 
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản? 
                        </div>
                                
                        <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div> 
                                
                                
                    </form>

                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>

                    <?php }?>
                </div>
            </div>

                <div class="row mb">

                    <div class="boxtitle">
                        Danh Mục
                    </div>

                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                                }
                            ?>
                                
                        </ul>
                    </div>

                    <div class="boxfooter searchbox">
                        <form action="index.php?act=sanpham " method="post">
                            <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm"><br><br>
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>

                </div>
                
                <div class="row mb">
                    <div class="boxtitle">
                        Top 10 yêu thích
                    </div>
                    <div class="boxcontent row ">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img=$img_path.$img;
                            echo '<div class="row mb10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                            }
                        ?>                                            
    </div>
</div>