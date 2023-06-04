<div class="dangky">
            <h2>cập nhật tài khoản</h2>
            <?php
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <div class="lable">
                    <label for="">Tên đăng Nhập</label><br>
                    <input type="text" name="user" value="<?php  echo $user_name; ?>">

                </div>
                <div class="lable">
                    <label for="">Mat khau</label><br>
                    <input type="password" name="pass" value="<?php  echo $password; ?>">

                    </div>

                <div class="lable">
                    <label for="">Dia chi Email</label><br>
                    <input type="email" name="email" value="<?php echo $email; ?>">

                </div>
                <div class="lable">
                    <label for="">Dia chi</label><br>
                    <input type="text" name="dia_chi" value="<?php  echo $dia_chi; ?>">

                </div>
                <div class="lable">
                    <label for="">dienthoai</label><br>
                    <input type="text" name="dien_thoai" value="<?php echo $dien_thoai; ?>">

                </div>

                <div class="submit">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" value="capnhat" name="capnhat">
            </div>
           

            </form>
            <h2 class="thongbao">
            <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
                         </h2>
        </div>