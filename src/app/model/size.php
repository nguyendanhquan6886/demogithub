<?php
    function query_allcate(){
        $sql = "select * from size order by size_id desc";
        $result = pdo_queryall($sql);
        return $result;
    }
?>