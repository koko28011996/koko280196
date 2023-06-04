<div class="dangky">
            <h2>Quên Mật Khẩu</h2>
            <form action="index.php?act=quenmk" method="post">

                <div class="lable">
                    <label for="">Dia chi Email</label><br>
                    <input type="email" name="email">

                </div>

                <div class="submit">
                <input type="submit" value="Gửi" name="guiemail">
            </div>
           

            </form>
            <h2 class="thongbao">
            <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
                         </h2>
        </div>