<?php
    function insert_sanpham($tenhh,$giahh,$giamgia,$filename,$ngaynhap,$mota,$dacbiet,$slxem,$iddm){
        $sql = "INSERT INTO `hanghoa`( `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `iddm`) VALUES ('$tenhh','$giahh','$giamgia','$filename','$ngaynhap','$mota','$dacbiet','$slxem','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql= " DELETE FROM `hanghoa` WHERE `id`=".$id;
        pdo_execute($sql);

    }
    function loadall_sanpham_top10(){
        $sql = " select * from hanghoa order by so_luot_xem desc limit 10"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = " select * from hanghoa order by id desc limit 9"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    
    function list_sp($pm="",$iddm=0){
        $sql = "select * from hanghoa where 1";
        if ($pm != "") {
        $sql .= " and ten_hh like '%$pm%'";
    }
        if($iddm>0){
        $sql.=" and iddm='$iddm'";
    }
        $sql.=" order by ten_hh";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
    }
    function loadone_sanpham($id){
        $sql="select * from hanghoa where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from hanghoa where iddm=".$iddm." AND id !=".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
function update_sp($id,$iddm,$tenhh,$giahh,$giamgia,$ngaynhap,$mota,$dacbiet,$slxem){
$sql ="UPDATE `hanghoa` SET `ten_hh`='[$tenhh]',`don_gia`='[$giahh]',`giam_gia`='[$giamgia]',`ngay_nhap`='[$ngaynhap]', `mo_ta`='[$mota]',`dac_biet`='[$dacbiet]',`so_luot_xem`='[$slxem]',`iddm`='[$iddm]' WHERE id=".$id;
pdo_execute($sql);
    }

    

?>
