<style>
table{
    width: 100%;
    border: 1px solid #999;
}
table th{
    padding: 20px 20px;
    background-color: #ccc;

}
table td{
    padding: 10px 20px;
    border: 1px solid #ccc;
}
</style>
<div class="content">
         <div class="contentleft">
            <form action="index.php?Act=dathang" medthod="post">
            <div class="thongtindohang">
            <h3>Thông tin đặt hàng</h3>
            <table>
                <?php
                if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['user_name'];
                    $address=$_SESSION['user']['dia_chi'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['dien_thoai'];
                }else{
                    $name="";
                    $address="";
                    $email="";
                    $tel="";
                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>địa chi</td>
                    <td><input type="text" name="address" value="<?php echo $address ?>"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" name="email" value="<?php echo $email ?>"></td>
                </tr>
                <tr>
                    <td>điện thoại</td>
                    <td><input type="text" name="tel" value="<?php echo $tel ?>"></td>
                </tr>
            </table>
            <div class="ptthanhtoan">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checker>Nhận Hàng trả tiền</td>
                        <td><input type="radio" name="pttt" checker>Thanh toán bằng thẻ tín dụng</td>
                        <td><input type="radio" name="pttt" checker>Thanh toán bằng MOMO</td>
                    </tr>
                </table>
            </div>
            <div class="thanhtoan">
            <table>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Sản Phẩm</th>
                    <th> Đơn Giá</th>
                    <th> Số lượng</th>
                    <th>Thành Tiền</th>
                    <th> Thao tác</th>
                    <?php
                    viewcart();
                

                     ?>
                


            </table>
            </form>
            </div>
            <div class="dongtydathang">
                <a href=""><input type="button" value="dat hang" name="dongy"><a>
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

