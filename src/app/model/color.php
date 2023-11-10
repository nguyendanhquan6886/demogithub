<?php
    function query_allcate(){
        $sql = "select * from color order by color_id desc";
        $result = pdo_queryall($sql);
        return $result;
    }
?>