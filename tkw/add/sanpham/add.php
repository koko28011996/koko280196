<home>
            <div class="row">
                <div class="themmoi">
                    <h1>thêm sản phẩm</h1>
                </div>
                <div class="row-form">

                    <form action="index.php?act=adhh" method="post" enctype="multipart/form-data">
                        <div class="label">
                            <label for="">mã sản phẩm</label><br>
                            <select name="iddm" id="">
                                <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                }
                                ?>
                                
                            </select>
                            <label for="">Tên sản phẩm</label><br>
                            <input type="text" name="tenhh"><br>
                            <label for="">đơn giá</label><br>
                            <input type="number" name="giahh"><br>
                            <label for="">Giam gia</label><br>
                            <input type="number" name="giamgia"><br>
                            <label for="">hinh</label><br>
                            <input type="file" name="hinh"><br>
                            <label for="">ngaynhap</label><br>
                            <input type="date" name="ngaynhap"><br>
                            <label for="">mota</label><br>
                            <textarea name="mota" id="" cols="30" rows="10"></textarea><br>
                            <label for="">đặc biệt</label><br>
                            <input type="text" name="dacbiet"><br>
                            <label for="">số lượt xem</label><br>
                            <input type="number" name="slxem"><br>
                        </div>
                        <div class="but">
                            <input type="submit" name="themmoi" value="themmoi">
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