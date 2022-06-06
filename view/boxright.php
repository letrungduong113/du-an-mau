<div class="row">
                    <div class="box-title">TÀI KHOẢN</div>
                    <div class="box-content">
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user'])
                        ?>
                            <div class="content-login">
                                <img width="30" height="30" src="view/images/acc.png" alt="">
                                <p class="name-login">
                                    <?=$user?>
                                </p>
                                
                            </div>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                            <?php if ($role == 1) {?>
                            <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                            <?php }?>
                            <li class="li-bt"><a href="index.php?act=thoat">Thoát</a></li>
                        <?php
                            }else {
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="content">
                                Tên đăng nhập <br>
                                <input type="text" name="user">
                            </div>
                            <div class="content">
                                Mật khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="content-check">
                                <input type="checkbox" name="">Ghi nhớ tài khoản?
                            </div>
                            <div class="content-login">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li class="li-bt"><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                        <?php }?>
                    </div>
                </div>
                <div class="row-md">
                    <div class="box-title">DANH MỤC</div>
                    <div class="box-content-2">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }

                            ?>
                            <!-- <li><a href="#">Nhẫn</a></li>
                            <li><a href="#">Lắc tay</a></li>
                            <li><a href="#">Dây chuyền</a></li>
                            <li><a href="#">Bông tai</a></li>
                            <li><a href="#">Lắc chân</a></li>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Vòng đeo tay</a></li>
                            <li><a href="#">Trang sức bộ</a></li> -->
                        </ul>
                    </div>
                    <div class="box-footer">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="TÌM KIẾM">
                        </form>
                    </div>
                </div>
                <div class="row-bt">
                    <div class="box-title">TOP 10 YÊU THÍCH</div>
                    <div class="box-content-3">
                        <?php

                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                $img = $img_path.$img;
                                echo '<div class="content">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }

                        ?>
                        <!-- <div class="content">
                            <img src="view/images/type1.png" alt="">
                            <a href="#">Lắc tay vàng</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type2.png" alt="">
                            <a href="#">Vòng tay bạc</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type3.png" alt="">
                            <a href="#">Dây chuyền vàng</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type4.png" alt="">
                            <a href="#">Bông tai đính đá</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type5.png" alt="">
                            <a href="#">Bông tai bạc</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type1.png" alt="">
                            <a href="#">Dây chuyền đính đá</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type2.png" alt="">
                            <a href="#">Nhẫn vàng</a>
                        </div>
                        <div class="content">
                            <img src="view/images/type3.png" alt="">
                            <a href="#">Dây chuyền bạc</a>
                        </div> -->
                    </div>
                </div>