<?php
function viewcart(){
    global $img_path;
                    $tong=0;
                    $i=0;
                    foreach($_SESSION['mycart'] as $cart){
                        $img=$img_path.$cart[3];
                        $tien=$cart[2]*$cart[4];
                        $tong+=$tien;
                        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="xoa"></a>';
                        echo '
            </tr>
                            <td><img src="'.$img.'" alt="" height="60px"></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[2].'</td>
                            <td>'.$cart[4].'</td>W
                            <td>'.$tien.'</td>
                            <td>'.$xoasp.'</td>
                <tr>';
                $i+=1;
                

                    }
                    echo '
                    <tr>
                    <td colspan="4">Tong don hang </td>
                    <td>'.$tong.'</td>
                    <td></td>
                    </tr>
                    ';
                
}
function tongdonhang(){
                    $tong=0;
                    foreach($_SESSION['mycart'] as $cart){
                        $tien=$cart[2]*$cart[4];
                        $tong+=$tien;
                    }
                    return $tong;              
}
function insert_bill($name,$email,$tel,$address,$pttt,$ngaydathang,$tongdonhang){
    $sql = "INSERT INTO `bill`( `b_name`, `b_email`, `b_address`,`b_pttt`, `b_ngaydathang` ,`tongtien`)
     VALUES ('[$name]','[$email]','[$address]','[$pttt]','[$ngaydathang]','[$tongdonhang]')";
    return pdo_execute_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO `bill`( `iduser`, `idpro`, `img`,`name`,`price`, `soluong` ,`thanhtien`,`idbil`)
                    VALUES ('[$iduser]','[$idpro]','[$img]','[$name]','[$price]','[$soluong]','[$thanhtien]','[$idbill]'";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="SELECT * FROM `bill` WHERE id=$id";
    $bill=pdo_query_one($sql);
    return $bill;
}

?>
