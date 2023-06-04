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
            <div class="thongtindohang">
                <h3>Cám ơn quý khách đã đặt hàng</h3>
              
           
            <div class="ptthanhtoan">
            <?php
                if(isset($bill)&&(is_array($bill))){
                    extract($bill);
                }

                ?>
                <h2>Mã Đơn Hàng của quý khách </h2>
                   <li>Mã Đơn hàng:<?php echo $bill['id'] ?></li>
                   <li>Ngày đặt hàng:<?php echo $bill['ngaydathang'] ?></li>
                   <li>Tổng đơn hàng:<?php echo $bill['tontien'] ?></li>
                   <li>Phương thức thanh toán:<?php echo $bill['b_pt'] ?></li>
            </div>
            <div class="thanhtoan">
                </h2>Phương Thức Thanh toán</h2>
            </div>
            <div class="dongtydathang">
            </h2>Thông tin Khách hàng</h2>
                
            </div>
            <table>
            <tr>
                    <td>Người đặt hàng</td>
                    <td><?php echo $bill['b_name']; ?></td>
                </tr>
                <tr>
                    <td>địa chi</td>
                    <td><?php echo $bill['b_address']; ?></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><?php echo $bill['b_email']; ?></td>
                </tr>
                <tr>
                    <td>điện thoại</td>
                    <td><?php echo $bill['b_tel']; ?></td>
                </tr>
            </table>
            <div class="ptthanhtoan">
                <table>
                    <tr>
                    <th>Hình ảnh</th>
                    <th>Sản Phẩm</th>
                    <th> Đơn Giá</th>
                    <th> Số lượng</th>
                    <th>Thành Tiền</th>
                    <th> Thao tác</th>
                    </tr>
            <tr>
            </tr>
                


            </table>
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

