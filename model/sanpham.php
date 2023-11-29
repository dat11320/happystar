<?php
// require_once 'pdo.php';

    function get_dssp_new(){
        $sql ="SELECT * FROM sanpham";
        return pdo_query($sql);
        
    }
    function sanpham_insert($name, $img, $price, $iddm){
        $sql = "INSERT INTO sanpham(name, img, price, iddm) VALUES (?,?,?,?)";
        pdo_execute($sql, $name, $img, $price, $iddm);
    }

    function sanpham_delete($id){
        $sql = "DELETE FROM sanpham WHERE id=?";
        pdo_execute($sql, $id);
    }
    function showsp($dssp){
        $html_dssp='';
        foreach ($dssp as $sp){
            extract($sp);
            $html_dssp.='<div class="box25 mr15">
            <div class="best"></div>
            <img style="height:200px; margin-top:30px;" src="layout/image/'.$img.'" alt="">
            <h3 style="margin: 8px 0;">'.$name.'</h3>
            <div class="info-product">
                <div>
                    
                    <div class="price">'.$price.'</div>
                    
                    
                </div>
                <div>
                    <button style="border-radius: 20px 0 0 20px;">Đặt hàng</button>
                    <button style="border-radius: 0 20px 20px 0;"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            
        </div>';
        }
    }
    return $html_dssp;
?>