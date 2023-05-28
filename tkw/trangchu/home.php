<div class="content">
         <div class="contentleft">
               <!-- Slideshow container -->
               <div class="banner">
    <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/banner.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/banner.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/banner.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>

            </div>
            </div>
            <div class="row">
            
                <?php
                foreach ($spnew as $sp){
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img=$img_path.$hinh;
                    echo'
                    <a href="'.$linksp.'">
                <div class="clo">
                    
                        <div class="product">
                            <img src="'.$hinh.'" alt="">
                        <div class="price">
                            <p>'.$ten_hh.'</p>
                            <span>'.$don_gia.'</span>
                        </div>
                        </div>
                    </div>
                    </a>';

                }
                ?>
                
                   
              
              

                
                
              
                <!-- xong san pham -->
            
                

            </div>
            <div class="sale">
                <a href=""><img src="img/sale.jpg" alt=""></a>
            </div>
            <div class="clo">
                <div class="product">
                    <img src="img/giay2.jpg" alt="">
                <div class="price">
                    <p>rolex1</p>
                    <span id="span">13.00$</span>
                    <p> 11.00</p>
                </div>
                </div>
            </div>
            <div class="clo">
                <div class="product">
                    <img src="img/giay1.jpg" alt="">
                <div class="price">
                    <p>rolex1</p>
                    <span id="span">13.00$</span>
                    <p> 11.00</p>
                </div>
                </div>
            </div>
            <div class="clo">
                <div class="product">
                    <img src="img/dh3.jpg" alt="">
                <div class="price">
                    <p>rolex1</p>
                    <span id="span">13.00$</span>
                    <p> 11.00</p>
                </div>
                </div>
            </div>
         </div>
        
            <div class="contentright">
                <div class="dangnhap">
                    <div class="taikhoan">
                        <a href="#"><h3>Tài khoản</h3></a>
                    </div>
                    <form>
                        <label for="">Tên đăng nhập</label><br>
                        <input type="text" name="username"><br>
                        <label for="">Mật Khẩu</label><br>
                        <input type="password" name="password"><br>
                       <button> Đăng Nhập </button>
                       <nav>
                        <ul>
                            <li><a href="quenml.html">Quên mật khẩu</a></li>
                            <li><a href="dangky.html">Đăng ký thành viên</a></li>
                        </ul>
                       </nav>
                    </form>
                </div>
                <div class="dm">
                    <div class="taikhoan">
                        <a href="#"><h3>Danh Mục</h3></a>
                    </div>
                    <div class="danhmuc">
                        <nav>
                            <ul>
                                <li><a href="dongho.html">Đồng hồ</a></li>
                                <li><a href="#">Máy tính</a></li>
                                <li><a href="#">Máy Ảnh</a></li>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Giày</a></li>
                                <li><a href="#">Nước Hoa</a></li>
                                <li><a href="#">Nón Thời Trang</a></li>
                                <li><a href="#">Túi Xách Du lịch</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="top">
                        <div class="taikhoan">
                            <a href="#"><h3>Top 10 Yêu Thích</h3></a>
                        </div>
                        <?php
                        foreach ($dstop10 as $sanpham){
                            extract($sanpham);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $img =$img_path.$hinh;
                            echo '<div class="yeuthich">
                            <img src="'.$img.'" alt="">
                             <a href="'.$linksp.'">'.$ten_hh.'</a>
                            </a>
                            </div>
                            ';
                        }
                        ?>
                        
                    </div>

                
            </div>
        </div>
        </div>