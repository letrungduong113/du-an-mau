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
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="list-table">
                <div class="table">
                    <table border="1">
                        <tr class="tb-title">
                            <th></th>
                            <th>Id</th>
                            <th>Nội dung</th>
                            <th>Iduser</th>
                            <th>Idpro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listbinhluan as $binhluan) {
                                extract($binhluan);
                                $xoabl =  "index.php?act=xoabl&id=".$id;
                                echo '<tr class="tb-in">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td>
                                            <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>