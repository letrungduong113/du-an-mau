<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAJ</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        
        <div class="row">
            <div class="form-title">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="list-table">
                <div class="table">
                    <table border="1">
                        <tr class="tb-title">
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm =  "index.php?act=suadm&id=".$id;
                                $xoadm =  "index.php?act=xoadm&id=".$id;
                                echo '<tr class="tb-in">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>
                                            <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>