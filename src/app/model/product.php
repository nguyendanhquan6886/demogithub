<?php



function queryallpro($key,$idcate){
    $sql = "select * from products where 1";
    if($key != ''){
        $sql.= " and pro_name like '%$key%'";
    }
    if($idcate >0){
        $sql.= " and cate_id = $idcate";
    }
    
    $sql.= " order by pro_id desc";
     $result = pdo_queryall($sql);
     return $result;
}

function addpro($ten,$img,$price,$ct,$cate,$stock,$brand){
    $sql = "insert into products(pro_name,pro_img,pro_price,pro_desc,pro_brand,pro_stock,cate_id) values('$ten','$img',$price,'$ct','$brand','$stock',$cate)";
    pdo_execute($sql);
}
function queryonepro($id){
    $sql= "select * from products where pro_id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function updatepro($ten,$gia,$brand,$img,$ct,$cate,$id){
    $sql = "update products set pro_name='$ten',pro_price=$gia,pro_img='$img',pro_desc='$ct',pro_brand='$brand',cate_id=$cate where pro_id = $id";
    pdo_execute($sql);
}
function deletepro($id){
    $sql = "delete from products where pro_id = $id";
    pdo_execute($sql);
}
function showpro_home(){
    $sql = "select * from products order by pro_id desc limit 9";
    $result = pdo_queryall($sql);
     return $result;
}
function query_procate($cate_id,$pro_id){
    $sql = "select * from products where cate_id = $cate_id and pro_id != $pro_id";
    $result=pdo_queryall($sql);
    return $result;
}
function deleteprocate($id){
    $sql = "delete from products where cate_id = $id";
    pdo_execute($sql);
}
function chitietadmin($id){
    $sql = "select * from pro_chitiet where pro_id = $id";
    $result=pdo_queryall($sql);
    return $result;
}
?>

    
    

