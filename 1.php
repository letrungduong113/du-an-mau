<?php
    session_start();
    $_SESSION['mycart'] = array();
    $sp1 = [1,"san pham 1",100,2];
    $sp2 = [1,"san pham 2",200,3];
    $cart = [];
    $cart[] = $sp1;
    $cart[] = $sp2;
    $_SESSION['mycart'] = $cart;
    echo '<h1>Session đã tạo</h1>';
    echo '<a href="2.php">Show dữ liệu session</a>';
?>