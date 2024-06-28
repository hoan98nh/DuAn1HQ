<?php
    function load_all_sach(){
        $sql = "SELECT * FROM sach";
        return pdo_query($sql);
    }

    function delete_sach($id) {
        $sql="DELETE from sach where id=".$id;       
        pdo_execute($sql);
    }


    function load_all_nhaxuatban(){
        $sql = "SELECT * FROM nhaxuatban";
        return pdo_query($sql);
    }

    function insert_nhaxuatban($ten_sach, $hinh_anh, $id_nha_xuat_ban, $gia, $mo_ta){
        $sql = "INSERT INTO `sach` (`id`, `ten_sach`, `hinh_anh`, `id_nha_xuat_ban`, `gia`, `mo_ta`) 
        VALUES (NULL, '$ten_sach', '$hinh_anh', '$id_nha_xuat_ban', '$gia', '$mo_ta');";
        pdo_execute($sql);
    }

    function load_one_sach($id){
        $sql="SELECT* from sach where id=$id";       
        return pdo_query_one($sql);
    }

    function update_sach($ten_sach, $hinh_anh, $id_nha_xuat_ban, $gia, $mo_ta){
        $sql="UPDATE `sach` SET `ten_sach` = '$ten_sach', `hinh_anh` = '$hinh_anh', `id_nha_xuat_ban` = '$id_nha_xuat_ban', 
        `gia` = '$gia',`mo_ta` = '$mo_ta' WHERE `sach`.`id` = 5;";
        pdo_execute($sql);
    }

?>