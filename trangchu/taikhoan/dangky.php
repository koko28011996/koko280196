<div class="dangky">
            <h2>Dăng Ký Thành viên</h2>
            <form action="index.php?act=dangky" method="post">
                <div class="lable">
                    <label for="">Tên đăng Nhập</label><br>
                    <input type="text" name="user">

                </div>
                <div class="lable">
                    <label for="">Mat khau</label><br>
                    <input type="password" name="pass">

                    </div>

                <div class="lable">
                    <label for="">Dia chi Email</label><br>
                    <input type="email" name="email">

                </div>

                <div class="submit">
                <input type="submit" value="dangky" name="dangky">
            </div>
           

            </form>
            <h2 class="thongbao">
            <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
                         </h2>
        </div>