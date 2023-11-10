<?php

include '../app/model/connectdb.php';
include '../app/model/cate.php';
include '../app/model/product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <div class="w-100">
        <h2 class="border p-3 text-bg-dark text-center rounded">Admin</h2>
        <div class="row">
            <div class="col-sm-3 text-bg-dark rounded p-3" style="height: 100%;">
                <div class="container">
                    <div class="list-group">
                        <a href="indexadmin.php?act=home" class="list-group-item list-group-item-action bg-black text-white ">Trang chủ</a>
                        <a href="indexadmin.php?act=cate" class="list-group-item list-group-item-action bg-black text-white">Danh mục</a>
                        <a href="indexadmin.php?act=pro" class="list-group-item list-group-item-action bg-black text-white">Sản phẩm</a>
                        <a href="indexadmin.php?act=kh" class="list-group-item list-group-item-action bg-black text-white">Khách hàng</a>
                        <a href="indexadmin.php?act=cmt" class="list-group-item list-group-item-action bg-black text-white">Bình luận</a>
                        <a href="indexadmin.php?act=thongke" class="list-group-item list-group-item-action bg-black text-white">Thống kê</a>
                    </div>
                </div>
            </div>
            <?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include './viewadmin/home.php';
            break;
        case 'cate':
            $resultcate = query_allcate();
            include './cate/listcate.php';
            break;
        case 'addcate':

            include './cate/addcate.php';
            break;
        case 'themcate':
            if (isset($_POST['themdm'])) {
                $cate_name = $_POST['cate_name'];
                addcate($cate_name);
            }

            $resultcate = query_allcate();
            include './cate/listcate.php';

            break;
        case 'suacate':
            if (isset($_GET['cate_idsua'])) {
                $cate_id = $_GET['cate_idsua'];
                $cate_one = query_onecate($cate_id);

                include './cate/updatecate.php';
            }

            break;

        case 'updatecate':
            if (isset($_POST['suadm'])) {
                $cate_name = $_POST['cate_name'];
                $cate_id = $_POST['cate_id'];
                updatecate($cate_name, $cate_id);
            }

            $resultcate = query_allcate();
            include './cate/listcate.php';

            break;

        case 'delcate':
            if (isset($_GET['cate_idxoa'])) {
                $cate_id = $_GET['cate_idxoa'];


                deletecate($cate_id);
            }
            $resultcate = query_allcate();
            include './cate/listcate.php';
            break;
        case 'pro':
           $result_pro = queryallpro('',0);
            include './sanpham/listproduct.php';
            break;
        case 'thempro':
           
            include './sanpham/addpro.php';
            break;
        case 'addpro':
           if(isset($_POST['addsp'])){
           $pro_name = $_POST['pro_name'];
           $cate_id = $_POST['cate_id'];
           $pro_price = $_POST['pro_price'];
           $pro_sale = $_POST['pro_sale'];
           $pro_mota = $_POST['pro_mota'];
           $img_name = $_FILES['pro_img']['name'];
           $img_tmp = $_FILES['pro_img']['tmp_name'];
           move_uploaded_file($img_tmp,"./sanpham/img/".$img_name);
           addpro($pro_name,$img_name,$pro_price,$pro_sale,$pro_mota,$cate_id);
           }

           $result_pro = queryallpro('',0);
           include './sanpham/listproduct.php';
            break;
            case 'suapro':
                if(isset($_GET['pro_idsua'])){
                    $pro_id = $_GET['pro_idsua'];
                  $pro_one =   queryonepro($pro_id);
                }
                include './sanpham/updatepro.php';
                break;
                case 'updatepro':
                    if(isset($_POST['updatesp'])){
                    $pro_id = $_POST['pro_id'];
                    $pro_one =   queryonepro($pro_id);
                    $pro_name = $_POST['pro_name'];
                    $cate_id = $_POST['cate_id'];
                    $pro_price = $_POST['pro_price'];
                    $pro_sale = $_POST['pro_sale'];
                    $pro_mota = $_POST['pro_mota'];
                    if($_FILES['pro_img']['name'] == null){
                        $img_name = $pro_one['pro_img'];
                    }
                    else{
                        $img_name = $_FILES['pro_img']['name'];
                    }
                    $img_tmp = $_FILES['pro_img']['tmp_name'];
                    move_uploaded_file($img_tmp,"./sanpham/img/".$img_name);
                    updatepro($pro_name,$pro_price,$pro_sale,$img_name,$pro_mota,$cate_id,$pro_id);
                    }
         
                    $result_pro = queryallpro('',0);
                    include './sanpham/listproduct.php';  
                    break;
                    case 'delpro':
                        if (isset($_GET['pro_idxoa'])) {
                            $pro_id = $_GET['pro_idxoa'];
            
            
                            deletepro($pro_id);
                        }
                        $result_pro = queryallpro('',0);
                        include './sanpham/listproduct.php'; 
                        break;


        default:
            include './viewadmin/home.php';

            break;
    }
}
include './viewadmin/footter.php';
