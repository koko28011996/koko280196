<home>
            <div class="row">
                <div class="themmoi">
                    <h1>Them moi danh muc</h1>
                </div>
                <div class="row-form">
                    <form action="index.php?act=addm" method="post">
                        <div class="label">
                            <label for="">Ma Loai</label><br>
                            <input type="text" name="maloai" disabled><br>
                            <label for="">Ten loai</label><br>
                            <input type="text" name="tenloai"><br>
                        </div>
                        <div class="but">
                            <input type="submit" name="themmoi" value="themmoi">
                            <input type="reset" value="Nhaplai">
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