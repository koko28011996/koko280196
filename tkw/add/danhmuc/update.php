<?php
if(is_array($dm)){
    extract($dm);
}

?>

<home>
            <div class="row">
                <div class="themmoi">
                    <h1>cap nhat loai hang</h1>
                </div>
                <div class="row-form">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="label">
                            <label for="">Ma Loai</label><br>
                            <input type="text" name="maloai" disabled><br>
                            <label for="">Ten loai</label><br>
                            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"><br>
                        </div>
                        <div class="but">
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit" name="capnhat" value="cap nhat" >
                            <input type="reset" value="Nhap lai">
                            <a href="index.php?act=listdm"><input type="button"value="danh sach">
                        </div>
                        
                        <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
                    </form>
                </div>
            </div>
        </home>