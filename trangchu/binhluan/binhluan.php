<?php
    session_start();
    $idpro=$_REQUEST['idpro'];
    $iduser=$_SESSION['user']['user_name'];
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $dsbl=list_bl($idpro);
    


     


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formbinhluan input[type=submit]{
            width: 100px;
            

        }
        .formbinhluan input[type=text]{
            width: 180px;

        }
        .blnguoidung{
            height: 50px;
            background-image: linear-gradient(#ccc,white);
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
        }
        .binhluan table{
            width:100%;
        }
        .binhluan table td:nth-child(1){
            width:50%;
        }
        .binhluan table td:nth-child(2){
            width:20%;
        }
        .binhluan table td:nth-child(3){
            width:30%;
        }
        
    </style>
</head>
<body>
        <div class="binhluan">
        <div class="dm">
                    <div class="taikhoan">
                        <a href="#"><h3>Bình Luận</h3></a>
                    </div>
                    <div class="danhmuc">
                    
                        <table>
                        <?php
                        foreach($dsbl as $bl){
                            extract($bl);
                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                        }


                        ?>
                        </table>
                    </div>
                  
                 
                <?php
                if($_SESSION['user']){
                ?>
                <div class="formbinhluan">
                <form action="trangchu/binhluan/binhluan.php" medthod="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="hidden" name="iduser" value="<?=$iduser?>">
                <input type=text name="noidung">
                <input type="submit" name="guidi" value="guibinhluan">
                </form>

                <?php

                }
                ?>
                

                </div>
                <?php
                if(isset($_POST['guidi'])&&($_POST['guidi'])){
                    $noidung=$_POST['noidung'];
                    $ngaybinhluan=date("h:i:sa d/m/Y");
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['user_name'];
                    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                }

                ?>                    
                          
          
                
            
        </div>
            </div>
           
            
        
    
</body>
</html>
