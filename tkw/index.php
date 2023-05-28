<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "trangchu/header.php";
    include "bientoancuc.php";
    $spnew = loadall_sanpham_home();
    $dstop10 = loadall_sanpham_top10();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case 'sanpham':
                if((isset($_GET['iddm']))&&($_GET['iddm']!="")){
                    $iddm=$_GET['iddm'];
                    $dssp = list_sp("",$iddm);
                    $tendm=load_ten_dm($iddm);
                    include "trangchu/sanpham.php";
                }else{
                    include "trangchu/home.php";

                }
                

            case'sanphamct':
                if((isset($_GET['idsp']))&&($_GET['idsp']!="")){
                    $id=$_GET['idsp'];
                    
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sanpham_cungloai = load_sanpham_cungloai($id,$iddm);
                    include "trangchu/sanphamct.php";
                }else{
                    include "trangchu/home.php";

                }
                
                

                break;
            case 'lienhe':
                include "trangchu/lienhe.php";
                break;
            case 'gopy':
                include "trangchu/gopy.php";
                break;
                default:
                include "trangchu/home.php";
                break;
            }
        }else{
            include "trangchu/home.php";
        }
    
    
    include "trangchu/footer.php";




?>