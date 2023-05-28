
        <div class="content">
         <div class="contentleft">
            <div class="thongtinhanghoa">
                <?php
                extract($onesp);
                ?>
               
                <img src="<?php echo $hinh ?>" alt="">
                <div class="tt">
                <P>Mã hàng hóa: <?php echo $id ?></P>
                <P>Tên hàng hóa: <?php echo $ten_hh ?></P>
                <P>Đơn Giá: <?php echo $don_gia ?></P>
                <p>Giảm Giá :<?php echo $giam_gia ?></p>
                <p><?php echo $mo_ta ?>

                </P>
            </div>
            <div class="binhluan">
                <h3>Binh luan nguoi dung</h3>
                <input type="search" name="gui">
                <button>Gửi</button>
            </div>
            <div class="hangcungloai">
                <h3>Hàng hóa cùng loại</h3>
                <div class="hangcungloai">
                <?php
                    foreach($sanpham_cungloai as $sanpham_cungloai){
                        extract($sanpham_cungloai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '   
                            <li><a href="'.$linksp.'">'.$ten_hh.'</a></li>
                          
                        ';
                    }
                    ?>
                
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
                            <li><a href="./quenml.html">Quên mật khẩu</a></li>
                            <li><a href="./dangky.html">Đăng ký thành viên</a></li>
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
                                <li><a href="./tt.sp/dongho.html">Đồng hồ</a></li>
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
                        <div class="yeuthich">
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
        </div>
        </div>
        