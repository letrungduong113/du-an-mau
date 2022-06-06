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

            if (is_array($dm)) {
                extract($dm);
            }

        ?>
        <div class="row">
            <div class="form-title">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="form-add">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row-1">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row-2">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if((isset($name))&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row-3">
                        <input type="hidden" name="id" value="<?php if((isset($id))&&($id>0)) echo $id;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
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