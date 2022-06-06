<div class="row-out">
            <div class="box">
                <div class="row-bn">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <img src="view/images/banner1.png">
                        </div>

                        <div class="mySlides fade">
                            <img src="view/images/banner2.jpg">
                        </div>

                        <div class="mySlides fade">
                            <img src="view/images/banner3.jpg">
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row-dm">
                    <?php

                        foreach ($spnew as $sp) {
                            extract($sp);
                            $hinh = $img_path.$img;
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            echo '<div class="sp">
                                    <div class="img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                    <p class="giasp">$'.$price.'</p>
                                    <a class="tensp" href="'.$linksp.'"><p>'.$name.'</p></a>
                                </div>';
                        }

                    ?>
                    <!-- <div class="sp">
                        <div class="img"><img src="view/images/sp1.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Lắc tay vàng</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp2.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp3.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp4.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp5.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp6.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp7.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp8.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div>
                    <div class="sp">
                        <div class="img"><img src="view/images/sp9.png" alt=""></div>
                        <p>$30</p>
                        <a href="#">Nhẫn bạc</a>
                    </div> -->
                </div>
            </div>
            <div class="box-right">
                <?php include "boxright.php";?>
            </div>
        </div>