<div class="row-out">
    <div class="box">
        <div class="row-bt-sp">
            <div class="box-title-ct">SẢN PHẨM: <?=$tendm?></div>
            <div class="row-dm">
                <?php

                    foreach ($dssp as $sp) {
                        extract($sp);
                        $hinh = $img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<div class="sp">
                                <div class="img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                <span>$'.$price.'</span>
                                <a href="'.$linksp.'"><p>'.$name.'</p></a>
                            </div>';
                    }

                ?>
            </div>
        </div>
        
    </div>
    <div class="box-right">
        <?php include "boxright.php";?>
    </div>
</div>