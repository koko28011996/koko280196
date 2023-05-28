<?php   
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";;
   
    include "header.php";
    //controller
if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'addm':
                 if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                     $tenloai=$_POST['tenloai'];
                     insert_danhmuc($tenloai);
                     // thong bao thuc th xong
                     $thongbao="them thanh cong";
                 }

            include "danhmuc/add.php";
             break;

            case 'listdm':
            $listdanhmuc=list_ds();
            include "danhmuc/list.php";
            break;

            case'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=list_ds();
            include "danhmuc/list.php";
            break;

            case'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

            case 'updatedm';
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id =$_POST['id'];
                update_dm($id,$tenloai);
                $thongbao="cap nhat thanh cong";
            }
            $listdanhmuc=list_ds();
            include "danhmuc/list.php";
            break;





            // danh cho san pham
            case 'adhh':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenhh=$_POST['tenhh'];
                    $giahh=$_POST['giahh'];
                    $giamgia=$_POST['giamgia'];
                    $ngaynhap=$_POST['ngaynhap'];
                    $mota=$_POST['mota'];
                    $dacbiet=$_POST['dacbiet'];
                    $slxem=$_POST['slxem'];
                    $iddm=$_POST['iddm'];


                    $filename = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      } else {
                        echo 'dang thanh cong';
                      }
                    insert_sanpham($tenhh,$giahh,$giamgia,$filename,$ngaynhap,$mota,$dacbiet,$slxem,$iddm);
                    // thong bao thuc th xong
                    
                    $thongbao="them thanh cong";
                }
                $listdanhmuc=list_ds();
                include "sanpham/add.php";
                break;
           

           case 'listsp':
           if(isset($_POST['listok'])&&($_POST['listok'])){
            $pm=$_POST['pm'];
            $iddm=$_POST['iddm'];
           }else{
            $pm='';
            $iddm=0;

           }
           
           $listdanhmuc=list_ds();
           $listsanpham=list_sp($pm,$iddm);
           include "sanpham/list.php";
           break;


           case'xoasp':
           if(isset($_GET['id'])&&($_GET['id']>0)){
               delete_sanpham($_GET['id']);
           }
           $listsanpham=list_sp("",0);
           include "sanpham/list.php";
           break;

           case'suasp';
           if(isset($_GET['id'])&&($_GET['id']>0)){
               $sp=loadone_sanpham($_GET['id']);
           }
           $listdanhmuc=list_ds();
           include "sanpham/update.php";
           break;

           case 'updatesp':
           if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenhh=$_POST['tenhh'];
                    $giahh=$_POST['giahh'];
                    $giamgia=$_POST['giamgia'];
                    $ngaynhap=$_POST['ngaynhap'];
                    $mota=$_POST['mota'];
                    $dacbiet=$_POST['dacbiet'];
                    $slxem=$_POST['slxem'];
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];


                    $filename = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      } else {
                        echo 'cập nhật thành công';
                      }
                    update_sp($id,$tenhh,$giahh,$giamgia,$filename,$ngaynhap,$mota,$dacbiet,$slxem,$iddm);
                    // thong bao thuc th xong
                    
                    $thongbao=" thanh cong";
            
           }

           $listsanpham=list_sp("",0);
           include "sanpham/list.php";
           break;
            
                
                default;
                include "home.php";
                break;
            }
            

        }else{
            include "home.php";
        }



    include "footer.php";
?>