<?php

     function addkh($pass,$name,$mail,$phone,$diachi){
        $sql = "insert into khachhang(kh_name,kh_pass,kh_mail,kh_tel,kh_address,vaitro_id) values('$name','$pass','$mail','$phone','$diachi',2)";
        pdo_execute($sql);
    }
    function check_user($mail,$pass){
        $sql= "select * from khachhang where kh_mail = '$mail' and kh_pass = '$pass'";
        $result_user = pdo_query_one($sql);
        return $result_user;
    }

function check_email($mail){
    $sql= "select * from khachhang where kh_mail = '$mail'";
    $result_user = pdo_query_one($sql);
    return $result_user;
}

function vaitro(){
    $sql = "select * from vaitro";
    $result = pdo_queryall($sql);
    return $result;
}
function loadall_taikhoan(){
    $sql = "select * from khachhang where 1";
    $result = pdo_queryall($sql);
    return $result;
}
function delete_taikhoan($kh_id){
    $sql = "delete from khachhang where kh_id = '$kh_id'";
    pdo_execute($sql);
}
function loadone_taikhoan($kh_id){
    $sql = "select * from khachhang where kh_id = '$kh_id'";
    $result = pdo_query_one($sql);
    return $result;
}
function update_taikhoan($kh_id,$kh_name,$kh_pass,$kh_mail,$kh_tel,$kh_address,$vaitro_id){
    $sql = "update khachhang set kh_name = '$kh_name', kh_pass = '$kh_pass', kh_mail = '$kh_mail', kh_tel = '$kh_tel', kh_address = '$kh_address', vaitro_id = '$vaitro_id' where kh_id = '$kh_id'";
    pdo_execute($sql);
}
?>