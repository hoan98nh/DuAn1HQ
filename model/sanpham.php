
<?php

    function loadall_product(){
        //SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

        //SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName FROM ((Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID) INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

        // $sql =  "select 
        // product_detail.id, product.name_product, category.name_cate, product.detail_product  
        // from product_detail 
        // inner join product on product_detail.id_pdt = product.id 
        // inner join category on category.id = product.id_cate
        // inner join size on size.id = product_detail.id_size 
        // inner join color on color.id = product_detail.id_color 
        // inner join material on material.id = product_detail.id_material  
        // ";

        $sql =  "select 
        product.id, product.name_product, category.name_cate, product.img_pdt, product.detail_product  
        from product
        inner join category on category.id = product.id_cate
        order by product.id asc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;  
        
    }

    function insert_product($id_cate,$name_product,$detail_product) {
        $sql="insert into product(id_cate, name_product, detail_product) 
        values($id_cate,'$name_product', '$detail_product')";
        pdo_execute($sql);
    }

    function delete_product($id) {
        // $sql="delete from product where id=".$id;
        $sql="update product set status = 0 where id=".$id;
        pdo_execute($sql);
    }

    function loadall_product_home() {
        $sql="select * from product where 1 order by id desc limit 0,9"; 
        $listsanpham=pdo_query($sql);
        return $listsanpham;  
    }

    //function loadall_product_top10() {
        //$sql="select * from product where 1 order by luotxem desc limit 0,10"; 
        //$listsanpham=pdo_query($sql);
        //return $listsanpham; 
    //}

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
    function loadone_product($id) {
        $sql="select * from product where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    // sp cùng loại
    function load_product_cungloai($id,$iddm) {
        $sql="select * from product where iddm=".$iddm." AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham; 
    }


    function update_product($id,$id_cate,$name_product,$img_pdt,$detail_product) {
        if($img_pdt!="")
            $sql="update product set id_cate='".$id_cate."', name_product='".$name_product."', detail_product='".$detail_product."', img_pdt ='".$img_pdt."' where id=".$id;
        else 
            $sql="update product set id_cate='".$id_cate."', name_product='".$name_product."', detail_product='".$detail_product."' where id=".$id;
        pdo_execute($sql);
    }

    //function update_product($id,$iddm,$tensp,$giasp,$mota,$hinh) {
        //if($hinh!="")
            //$sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id=".$id;
        //else 
            //$sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
        //pdo_execute($sql);
    //}

?>