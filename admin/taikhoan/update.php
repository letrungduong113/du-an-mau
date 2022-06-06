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

            if (is_array($tk)) {
                extract($tk);
            }

        ?>
        <div class="row">
            <div class="form-title">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="form-add">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row-1">
                        Mã tk<br>
                        <input type="text" name="matk" disabled>
                    </div>
                    <div class="row-2">
                        Tên đăng nhập<br>
                        <input type="text" name="user" value="<?php echo $user;?>">
                    </div>
                    <div class="row-2">
                        Mật khẩu<br>
                        <input type="text" name="pass" value="<?php echo $pass;?>">
                    </div>
                    <div class="row-2">
                        Email<br>
                        <input type="text" name="email" value="<?php echo $email;?>">
                    </div>
                    <div class="row-2">
                        Địa chỉ<br>
                        <input type="text" name="address" value="<?php echo $address;?>">
                    </div>
                    <div class="row-2">
                        Điện thoại<br>
                        <input type="text" name="tel" value="<?php echo $tel;?>">
                    </div>
                    <div class="row-2">
                        Vai trò<br>
                        <input type="text" name="role" value="<?php echo $role;?>">
                    </div>
                    <div class="row-3">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
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