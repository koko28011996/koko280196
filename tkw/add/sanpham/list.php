<div class="row">
                <div class="themmoi">
                    <h1>Danh sach loai hang</h1>
                </div>
                <form action="index.php?act=listsp" method="post">
                            <input type="text" name="pm">
                            <select name="iddm">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                 foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                 }
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Tim kiem">
                </form>
               
                <div class="row-form">
                <from action="" method="post" enctype= "multipart/form-data">
                    <div class="row-mb10">
                    
                       
                        <table>
                            <tr>
                            <th></th>
                            <th>Mã hàng hóa</th>
                            <th>tên hàng hóa</th>
                            <th>đơn giá</th>
                            <th>Giảm giá</th>
                            <th>Ảnh</th>
                            <th>ngày Nhập</th>
                            <th>Mô tả</th>
                            <th>đặc biệt</th>
                            <th>Số lượt Xem</th>
                            <th></th>
                            </tr>
                            <?php

                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$hinh;
                                if(is_file($hinhpath)){
                                    $filename="<img src='".$hinhpath."' height ='80'>";
                                }else{
                                    $filename=" khong co hinh";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$ten_hh.'</td>
                                <td>'.$don_gia.'</td>
                                <td>'.$giam_gia.'</td>
                                <td>'.$filename.'</td>
                                <td>'.$ngay_nhap.'</td>
                                <td>'.$mo_ta.'</td>
                                <td>'.$dac_biet.'</td>
                                <td>'.$so_luot_xem.'</td>
                                
                                <td>
                                     <a href="'.$suasp.'">
                                    <input type="button" value="Sua"></a>
                                    <a href="'.$xoasp.'" >
                                    <input type="button" value="Xoa"></a>
                                </td>
                            </tr>';

                            }
                            ?>

                            
                            

                            
                        </table>
                    </div>
                    <div class="but">
                            <input type="button" value="chon tat ca">
                            <input type="button" value="bo tat ca"></button>
                            <button type="button" value="Xoa cac muc da chon">
                            <a href="index.php?act=adhh"><input type="button" value="Nhap them">
                    </div>
                        </div>
                    </form>
                </div>