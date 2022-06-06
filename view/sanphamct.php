<div class="row-out">
    <div class="box">
        <div class="row-bt-sp">
            <?php extract($onesp);?>
            <div class="box-title-ct"><?=$name?></div>
            <div class="box-content-3">
                <?php

                    $img = $img_path.$img;
                    echo '<div class="img"><img src="'.$img.'"></div>';
                    echo '<span>$'.$price.'</span><br>';
                    echo '<p>'.$mota.'</p>';

                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row-bt" id="binhluan">
            
        </div>
        <div class="row-bt">
            <div class="box-title">SẢN PHẨM CUNG LOẠI</div>
            <div class="box-content-5">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="box-right">
        <?php include "boxright.php";?>
    </div>
</div>