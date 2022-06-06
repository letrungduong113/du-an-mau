<div class="row-out">
    <div class="box">
        <div class="row-bt-sp">
            <div class="box-title-ct">QUÊN MẬT KHẨU</div>
            <div class="box-content-3">
                <form class="dangky" action="index.php?act=quenmk" method="post">
                    <div class="nhap">
                        Email<br>
                        <input class="input" type="email" name="email">
                    </div>
                    
                    <input class="btn" type="submit" value="Gửi" name="guiemail">
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