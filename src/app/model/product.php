<?php

    function queryallpro($key,$idcate){
        $sql = "select * from products where 1";
        if($key != ''){
            $sql.= " and pd_name like '%$key%'";
        }
        if($idcate >0){
            $sql.= " and cate_id = $idcate";
        }
        
        $sql.= " order by pro_id desc";
         $result = pdo_queryall($sql);
         return $result;
    }
    
    
?>
