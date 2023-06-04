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
                    $img =$img_path.$hinh;
                    echo'
                    <a href="'.$linksp.'">
                <div class="clo">
                    
                        <div class="product">
                            <img src="'.$img.'" alt="">
                        <div class="price">
                            <p>'.$ten_hh.'</p>
                            <span>'.$don_gia.'</span></a>
                            <div class="muahang">
                            <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                            <input type="hidden" name="don_gia" value="'.$don_gia.'">
                            <input type="hidden" name="img" value="'.$hinh.'">
                            <input type="submit" name="addtocart" value="Thêm Vào rỏ hàng">
                            </form>
                            </div>
                        </div>
                       
                        </div>

                    </div>';
                    
                    
                    

                }
                ?>
                
                   
              
              

                
                
              
                <!-- xong san pham -->
            
                

            </div>
            <div class="sale">
                <a href=""><img src="img/sale.jpg" alt=""></a>
            </div>
         </div>
        
            <div class="contentright">
                <div class="dangnhap">
                    <div class="taikhoan">
                        <a href="#"><h3>Tài khoản</h3></a>
                    </div>
                    <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user'])
                        ?>
                        
                        <lable for="">Xin chao <?php $user_name ?></label>
                        
                        
                        <ul>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập Nhật tài khoản</a></li>
                            <li><a href="add/index.php?">đăng nhập admin</a></li>
                            <li><a href="index.php?act=thoat">Thoats</a></li>
                        </ul>
                        <?php

                    }else{
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                            <lable for="">Ten dang nhap</label>
                            <input type="text" name="user">
                            <lable for="">Mat Khau</label>
                            <input type="password" name="pass">
                            <input type="submit" name="dangnhaptk" value="Đăng Nhập">
            </form>
                    <nav>
                        <ul>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                        </ul>
                       </nav>
                       
                       <?php
                       }
                       ?>
                    
                </div>
                <div class="dm">
                    <div class="taikhoan">
                        <a href="#"><h3>Danh Mục</h3></a>
                    </div>
                    <div class="danhmuc">
                        <nav>
                            <ul>
                                <?php
                                foreach ($dsdm as $dm){
                                    extract($dm);
                                    $linkspp="index.php?act=sanpham&idsp=".$id;
                                    echo'
                                    <li><a href="'.$linkspp.'">'.$name.'</a></li>
                                    
                                    ';


                                }
                                ?>
                              
                                
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