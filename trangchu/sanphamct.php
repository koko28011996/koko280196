
        <div class="content">
         <div class="contentleft">
            <div class="thongtinhanghoa">
                <?php
                extract($onesp);
                $img =$img_path.$hinh;
                ?>
               
                <img src="<?php echo $img ?>" alt="">
                <div class="tt">
                <P>Mã hàng hóa: <?php echo $id ?></P>
                <P>Tên hàng hóa: <?php echo $ten_hh ?></P>
                <P>Đơn Giá: <?php echo $don_gia ?></P>
                <p>Giảm Giá :<?php echo $giam_gia ?></p>
                <p><?php echo $mo_ta ?>

                </P>
            </div>
            <!-- Binh luan bang jquery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                    <script>
                    $(document).ready(function(){
                        $("#binhluan").load("trangchu/binhluan/binhluan.php", {idpro:<?=$id?>});
                    });
                    </script> 
            
            <div class="binhluan" id="binhluan">
        
            

                
                
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