
<div class="content">
         <div class="contentleft">
            <div class="thongtinhanghoa">
                <h3> Thông tin sản phẩm</h3>
                <?php
                foreach ($dssp as $sp){
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
        