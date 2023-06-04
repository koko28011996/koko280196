<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql=" INSERT INTO `binhluan`(`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('[$noidung]','[$iduser]','[$idpro]','[$ngaybinhluan]')";     
        pdo_execute($sql);
    }
    //  danh cho binh luan san pham chi tiet
    function list_bl($idpro){
        $sql = "select * from binhluan where idpro='".$idpro."' order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function list_binhluan(){
        $sql = "select * from `binhluan` order by id desc";
        $listbinhluan=pdo_query($sql);
                return $listbinhluan;
            }
    function delete_binhluan($id){
    $sql= "DELETE FROM `binhluan` WHERE `id`=".$id;
    pdo_execute($sql);
        
    }
  ?>
    