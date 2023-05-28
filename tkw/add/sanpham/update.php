<?php
if(is_array($sp)){
    extract($sp);
}
$hinhpath="../upload/".$hinh;
if(is_file($hinhpath)){
    $img="<img src='".$hinhpath."' height ='50'>";
}else{
    $img=" khong co hinh";
}

?>

<home>
            <div class="row">
                <div class="themmoi">
                    <h1>cap nhat loai hang</h1>
                    
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
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="label">
                            <label for="">mã sản phẩm</label><br>
                            <input type="text" name="id" disabled><br>
                            <label for="">Tên sản phẩm</label><br>
                            <input type="text" name="tenhh" value="<?php if(isset($ten_hh)&&($ten_hh!="")) echo $ten_hh; ?>" ><br>
                            <label for="">đơn giá</label><br>
                            <input type="number" name="giahh" value="<?php if(isset($don_gia)&&($don_gia!="")) echo $don_gia; ?>"><br>
                            <label for="">Giam gia</label><br>
                            <input type="number" name="giamgia" value="<?php if(isset($giam_gia)&&($giam_gia!="")) echo $giam_gia; ?>"><br>
                            <label for="">hinh</label><br>
                            <input type="file" name="hinh"  ><br>
                            <label for="">ngaynhap</label><br>
                            <input type="date" name="ngaynhap" value="<?php if(isset($ngay_nhap)&&($ngay_nhap!="")) echo $ngay_nhap; ?>"><br>
                            <label for="">mota</label><br>
                            <textarea name="mota" id="" cols="30" rows="10" value="<?php if(isset($mo_ta)&&($mo_ta!="")) echo $mo_ta; ?>"></textarea>
                            <label for="">đặc biệt</label><br>
                            <input type="text" name="dacbiet" value="<?php if(isset($dac_biet)&&($dac_biet!="")) echo $dac_biet; ?>"><br>
                            <label for="">số lượt xem</label><br>
                            <input type="number" name="slxem" value="<?php if(isset($so_luot_xem)&&($so_luot_xem!="")) echo $so_luot_xem; ?>"><br>
                            <label for="">iddm</label><br>
                            <input type="number" name="iddm"><br>
                            
                        </div>
                        <div class="but">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit" name="capnhat" value="cập nhật">
                            <input type="reset" value="Nhaplai">
                            <a href="index.php?act=listsp"><input type="button"value="danh sach">
                        </div>
                        
                        <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
                    </form>
                </div>
            </div>
        </home>