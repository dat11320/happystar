<?php
    // nhúng kết nối csdl
    include "dao/pdo.php";
    include "dao/danhmuc.php";
    include "dao/sanpham.php";

    include "view/header.php";

    //data dành cho trang chủ
    $dssp_new=get_dssp_new(4);
    $dssp_best=get_dssp_best(2);
    $dssp_view=get_dssp_view(4);


    if(!isset($_GET['pg'])){

        include "view/home.php";
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':
                $dsdm=danhmuc_all();

                if(!isset($_GET['iddm'])){
                    $iddm=0;
                }else{
                    $iddm=$_GET['iddm'];
                }
                $dssp=get_dssp($iddm,12);

                include "view/sanpham.php";
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            default:
                
                include "view/home.php";
                break;
        }
    }
    

    include "view/footer.php";

?>