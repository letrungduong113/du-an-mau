<?php

    session_start();
    include "../../model/pdo.php";
    include  "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];

    $dsbl = loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-content-2{
            border-top: 1px solid rgb(197, 197, 197);
            border-bottom: 1px solid rgb(197, 197, 197);
        }
        table{
            width: 920px;
        }
        table td{
            padding: 10px 30px 10px 20px;
            border-right: 1px solid #ccc;
        }
        .box-footer{
            padding: 15px 0 10px 20px;
            background-color: rgb(240, 240, 240);
        }
        .box-footer input{
            border: 1px solid rgb(197, 197, 197);
            border-radius: 5px;
            height: 30px;
            background-color: #fff;
        }
        .box-footer input[type="text"]{
            width: 80%;
        }
        .box-footer input[type="submit"]{
            width: 17%;
        }
        h2{
            margin: 0 0 5px 0;
            color: red;
            font-size: 20px;
        }
    </style>
</head>
<body>
        <div class="box-title">BÌNH LUẬN</div>
        <div class="box-content-2">
            <table>
                <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>'.$noidung.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$ngaybinhluan.'</td></tr>';
                    }

                ?>
            </table>
        </div>
        <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user'])
        ?>
        <div class="box-footer">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
            }else {
        ?>
        <div class="box-footer">
            <h2>Đăng nhập để bình luận.</h2>
        </div>
        <?php }?>
        <?php
            if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
</body>
</html>