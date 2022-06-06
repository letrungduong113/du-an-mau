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
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="form-add">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row-1">
                        Danh mục
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value='.$id.'>'.$name.'</option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row-2">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row-2">
                        Giá<br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row-2">
                        Hình<br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row-2">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row-3">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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