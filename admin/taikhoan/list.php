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
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="list-table">
                <div class="table">
                    <table border="1">
                        <tr class="tb-title">
                            <th></th>
                            <th>MÃ TK</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $suatk =  "index.php?act=suatk&id=".$id;
                                $xoatk =  "index.php?act=xoatk&id=".$id;
                                echo '<tr class="tb-in">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td>
                                            <a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
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