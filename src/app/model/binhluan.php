<?php 
    function load_binhluan($pro_id = 0){
        $sql = "select * from coment where 1";
    
        if($pro_id > 0){
            $sql .= " and pro_id = $pro_id";
        }
    
        $sql .= " order by cmt_id desc";
        $result = pdo_queryall($sql);
        return $result;
    }
    function delete_binhluan($cmt_id){
        $sql = "delete from coment where cmt_id = '$cmt_id'";
        pdo_execute($sql);
    }
?>