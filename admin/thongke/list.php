    
        <div class="row">
            <div class="form-title">
                <h1>THỐNG KÊ SẢN PHẨM THEO DANH MỤC</h1>
            </div>
            <div class="list-table">
                <div class="table">
                    <table border="1">
                        <tr class="tb-title">
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        </tr>
                        <?php
                            foreach ($listthongke as $thongke) {
                                extract($thongke);
                                echo '<tr class="tb-in">
                                        <td>'.$madm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="btn-controll">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </div>
        </div>