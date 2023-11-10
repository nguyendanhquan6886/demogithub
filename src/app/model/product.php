<?php



function queryallpro($key,$idcate){
    $sql = "select * from product where 1";
    if($key != ''){
        $sql.= " and pro_price like '%$key%'";
    }
    if($idcate >0){
        $sql.= " and cate_id = $idcate";
    }
    
    $sql.= " order by pro_id desc";
     $result = pdo_queryall($sql);
     return $result;
}

function addpro($ten,$img,$price,$sale,$ct,$cate){
    $sql = "insert into product(pro_name,pro_img,pro_price,pro_sale,pro_mota,cate_id) values('$ten','$img',$price,'$sale','$ct',$cate)";
    pdo_execute($sql);
}
function queryonepro($id){
    $sql= "select * from product where pro_id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function updatepro($ten,$gia,$sale,$img,$ct,$cate,$id){
    $sql = "update product set pro_name='$ten',pro_price=$gia,pro_sale=$sale,pro_img='$img',pro_mota='$ct',cate_id=$cate where pro_id = $id";
    pdo_execute($sql);
}
function deletepro($id){
    $sql = "delete from product where pro_id = $id";
    pdo_execute($sql);
}
function showpro_home(){
    $sql = "select * from product order by pro_id desc limit 9";
    $result = pdo_queryall($sql);
     return $result;
}
function query_procate($cate_id,$pro_id){
    $sql = "select * from product where cate_id = $cate_id and pro_id != $pro_id";
    $result=pdo_queryall($sql);
    return $result;
}
function deleteprocate($id){
    $sql = "delete from product where cate_id = $id";
    pdo_execute($sql);
}
?>

    
    
?>
