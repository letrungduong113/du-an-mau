<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-title">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="form-add">
                <form action="index.php?act=adddm" method="post">
                    <div class="row-1">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row-2">
                        Tên loại<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row-3">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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