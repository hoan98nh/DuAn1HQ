
<?php

    function insert_sanpham($id_cate,$name_product,$detail_product) {
        $sql="insert into product(id_cate, name_product, detail_product) 
        values($id_cate,'$name_product', '$detail_product')";
        pdo_execute($sql);
    }

    function delete_sanpham($id) {
        // $sql="delete from sanpham where id=".$id;
        $sql="update product set status = 0 where id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham_home() {
        $sql="select * from product where 1 order by id desc limit 0,9"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham;  
    }

    function loadall_sanpham_top10() {
        $sql="select * from product where 1 order by luotxem desc limit 0,10"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham; 
    }

    function loadall_sanpham($kyw="",$iddm=0) {
        $sql="select * from product where 1"; 
        if($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0) {
            $sql.=" and iddm = '".$iddm."'";
        }

        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham; 
    }

    function loadone_ten_dm($iddm) {
        if($iddm>0) {
            $sql="select * from category where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
        } else {
            return "";
        }
    }

    // sp chi tiết
    function loadone_sanpham($id) {
        $sql="select * from product where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    // sp cùng loại
    function load_sanpham_cungloai($id,$iddm) {
        $sql="select * from product where iddm=".$iddm." AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham; 
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh) {
        if($hinh!="")
            $sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id=".$id;
        else 
            $sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }

?>