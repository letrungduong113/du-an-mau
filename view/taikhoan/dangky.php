<div class="row-out">
    <div class="box">
        <div class="row-bt-sp">
            <div class="box-title-ct">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="box-content-3">
                <form class="dangky" action="index.php?act=dangky" method="post">
                    <div class="nhap">
                        Email<br>
                        <input class="input" type="email" name="email">
                    </div>
                    <div class="nhap">
                        Tên đăng nhập<br>
                        <input class="input" type="text" name="user">
                    </div>
                    <div class="nhap">
                        Mật khẩu<br>
                        <input class="input" type="password" name="pass">
                    </div>
                    <input class="btn" type="submit" value="Đăng ký" name="dangky">
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