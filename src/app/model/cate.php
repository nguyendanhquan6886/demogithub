
<?php
    
    function addcate($tenloai){
        $sql = "insert into category values (null,'$tenloai')";
        pdo_execute($sql);
    }
    function query_onecate($id){
        $sql = "Select * from category where cate_id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function query_allcate(){
        $sql = "select * from category order by cate_id desc";
        $result = pdo_queryall($sql);
        return $result;
    }
    function updatecate($tenloai,$id){
        $sql = "update category set cate_name='$tenloai' where cate_id = $id";
        pdo_execute($sql);
    }
    function deletecate($id){
        $sql ="delete from category where cate_id = $id";
        pdo_execute($sql);
    }
?>
