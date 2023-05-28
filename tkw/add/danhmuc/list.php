<div class="row">
                <div class="themmoi">
                    <h1>Danh sach loai hang</h1>
                </div>
                <div class="row-form">
                    <div class="row-mb10">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loai</th>
                                <th></th>
                            </tr>
                            <?php

                            foreach($listdanhmuc as $dm){
                                extract($dm);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>
                                     <a href="'.$suadm.'">
                                    <input type="button" value="Sua"></a>
                                    <a href="'.$xoadm.'" >
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
                            <a href="index.php?act=addm"><input type="button" value="Nhap them">
                    </div>
                        </div>
                    </form>
                </div>