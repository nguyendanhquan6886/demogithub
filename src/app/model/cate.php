
<?php
    
    function addcate($tenloai){
        $sql = "insert into cate values (null,'$tenloai')";
        pdo_execute($sql);
    }
    function query_onecate($id){
        $sql = "Select * from cate where cate_id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function query_allcate(){
        $sql = "select * from cate order by cate_id desc";
        $result = pdo_queryall($sql);
        return $result;
    }
    function updatecate($tenloai,$id){
        $sql = "update cate set cate_name='$tenloai' where cate_id = $id";
        pdo_execute($sql);
    }
    function deletecate($id){
        $sql ="delete from cate where cate_id = $id";
        pdo_execute($sql);
    }
?>
