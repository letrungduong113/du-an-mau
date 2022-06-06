<div class="row-out">
    <div class="box">
        <div class="row-bt-sp">
            <div class="box-title-ct">CẬP NHẬT TÀI KHOẢN</div>
            <div class="box-content-3">
                <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);

                    }

                ?>
                <form class="dangky" action="index.php?act=edit_taikhoan" method="post">
                    <div class="nhap">
                        Email<br>
                        <input class="input" type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="nhap">
                        Tên đăng nhập<br>
                        <input class="input" type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="nhap">
                        Mật khẩu<br>
                        <input class="input" type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="nhap">
                        Địa chỉ<br>
                        <input class="input" type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="nhap">
                        Điện thoại<br>
                        <input class="input" type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="btn" type="submit" value="Cập nhật" name="capnhat">
                    <input class="btn" type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                        if (isset($thongbao)&&$thongbao!="") {
                            echo $thongbao;
                        }
                    ?>
                </h2>
                
            </div>
        </div>
        
    </div>
    <div class="box-right">
        <?php include "view/boxright.php";?>
    </div>
</div>