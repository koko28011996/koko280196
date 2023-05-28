<?php
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO `danhmuc` ( `name`) VALUES ( '$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql= "DELETE FROM `danhmuc` WHERE `id`=".$id;
        pdo_execute($sql);

    }
    function list_ds(){
        $sql = "select * from danhmuc order by name";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone($id){
        $sql="select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_dm($id,$tenloai){
        $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>
