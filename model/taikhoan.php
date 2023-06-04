<?php
    function insert_taikhoan($user,$pass,$email){
        $sql = "INSERT INTO `khachhang`( `user_name`, `password`, `email`) VALUES ('$user','$pass','$email')";
        pdo_execute($sql);
    }
    
    function checkuser($user,$pass){
            $sql=" select * from `khachhang` where `user_name`='$user' and `password`='$pass'";
            $sp=pdo_query_one($sql);
            return $sp;
        }
    function update_tk($id,$user,$pass,$dien_thoai,$email,$dia_chi){
            $sql = "UPDATE `khachhang` SET `user_name`='[$user]',`password`='[$pass]',`email`='[$email]',`dia_chi`='[$dia_chi]',`dien_thoai`='[$dien_thoai]' WHERE id=".$id;
                pdo_execute($sql);
            }
    function update_tkad($id,$user,$pass,$dien_thoai,$email,$dia_chi,$trangthai){
                $sql = "UPDATE `khachhang` SET `user_name`='[$user]',`password`='[$pass]',`email`='[$email]',`dia_chi`='[$dia_chi]',`dien_thoai`='[$dien_thoai]',`trangthai`='[$trangthai]' WHERE id=".$id;
                    pdo_execute($sql);
            }
    function checkemail($email){
                $sql=" select * from `khachhang` where `email`='".$email."'";
    
                $sp=pdo_query_one($sql);
                return $sp;
            }
     function list_taikhoan(){
        $sql = "select * from `khachhang` order by id desc";
        $listtaikhoan=pdo_query($sql);
                return $listtaikhoan;
            }
    function delete_taikhoan($id){
    $sql= "DELETE FROM `khachhang` WHERE `id`=".$id;
        pdo_execute($sql);
        
        
    }
    function loadone_taikhoan($id){
        $sql="select * from `khachhang` where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }