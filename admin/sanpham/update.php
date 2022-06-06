<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <?php

            if (is_array($sanpham)) {
                extract($sanpham);
            }
            $hinhpath = "../upload/".$img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='".$hinhpath."' height='80'>";
            }else{
                $hinh = "No photo";
            }

        ?>
        <div class="row">
            <div class="form-title">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="form-add">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row-1">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if ($iddm==$id) $s="selected"; else $s="";
                                        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                                    
                                }
                            ?>

                        </select>
                    </div>
                    <div class="row-2">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row-2">
                        Giá<br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row-2">
                        Hình<br>
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row-2">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row-3">
                        <input type="hidden" name="id" value="<?=$id=$_GET['id']?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
</body>
</html>