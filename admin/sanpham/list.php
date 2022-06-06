<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAJ</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="../view/css/listsp.css">
</head>

<body>
    <div class="container">
        
        <div class="row">
            <div class="form-title">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value='.$id.'>'.$name.'</option>';
                                }
                            ?>

                        </select>
                        <input type="submit" name="listok" value="GO">
                    </form>
            <div class="list-table">
                <div class="table">
                    
                    <table border="1">
                        <tr class="tb-title">
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp =  "index.php?act=suasp&id=".$id;
                                $xoasp =  "index.php?act=xoasp&id=".$id;
                                $hinhpath = "../upload/".$img;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh = "No photo";
                                }
                                echo '<tr class="tb-in">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$luotxem.'</td>
                                        <td>
                                            <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="btn-controll">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>