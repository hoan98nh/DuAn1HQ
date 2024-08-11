
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
        product.id, product.name_product, category.name_cate, product.img_pdt, product.detail_product, product.status  
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

    function load_single_pdt($id){
        $sql = "select * from product where status  = 'active' and id = $id ";
        $single =pdo_query_one($sql);
        return $single;
    }

    function load_pdt_detail($id_pdt){
        $sql = "select * from product where status  = 'active' and id_pdt = $id_pdt ";
        $pdt_detail =pdo_query_one($sql);
        return $pdt_detail;
    }

    function insert_product_table($id_cate,$name_product, $img_pdt,$detail_product) {
        $sql="insert into product(id, id_cate, name_product, img_pdt, detail_product, status) 
        values('', $id_cate,'$name_product', ' $img_pdt', '$detail_product', 'active')";
        pdo_execute($sql);
    }
    function insert_product_detail2($name_pdtdetail, $id_pdt, $id_size,$id_color, $id_material, $image_pd,$quantity, $price) {
        $sql="insert into product_detail(id, name_pdtdetail, id_pdt, id_size, id_color, id_material, image_pd, quantity, price, status) 
        values('', '$name_pdtdetail',$id_pdt, $id_size, $id_color, $id_material, '$image_pd',$quantity, $price, 'active')";
        pdo_execute($sql);
    }

    function insert_product_detail($name_pdtdetail, $id_pdt, $id_size,$id_color, $id_material, $image_pd, $price) {
        $sql="insert into product_detail(id, name_pdtdetail, id_pdt, id_size, id_color, id_material, image_pd, price, status) 
        values('', '$name_pdtdetail',$id_pdt, $id_size, $id_color, $id_material, '$image_pd', $price, 'active')";
        pdo_execute($sql);
    }

    function lastId($table){
        $sql = "select id from $table order by id desc limit 1";
        $lastId = pdo_query($sql);
        return $lastId;
    }

    function loadall_product_detail($id_pdt){
        $sql = "SELECT 
        product_detail.id, product_detail.name_pdtdetail, size.name_size, color.name_color, material.name_material, product_detail.image_pd, product_detail.quantity, product_detail.price, product_detail.status
        from 
        product_detail
        INNER JOIN size on product_detail.id_size  = size.id
        INNER JOIN color on product_detail.id_color = color.id 
        INNER JOIN material on product_detail.id_material = material.id
        where product_detail.id_pdt = $id_pdt
        order by product_detail.id asc
        ";
        $listpdtdetail=pdo_query($sql);
        return $listpdtdetail;  
    }

    function loadone_producttable($id){
        $sql = "SELECT * from product where id = $id";
        $onefrompdt =pdo_query_one($sql);
        return $onefrompdt;
    }
    function load_pdt_detail_of_one($id_pdt){
        $sql = "SELECT * from product_detail where id_pdt = $id_pdt and status = 'active'";
        $listDetail =pdo_query($sql);
        return $listDetail;
    }

    function update_tb_pdt($id, $id_cate, $name_product, $img_pdt, $detail_product, $status){
        $sql = "UPDATE product set id_cate = '" . $id_cate . "', name_product ='" . $name_product . "', img_pdt = '" . $img_pdt . "', detail_product = '" . $detail_product . "', status ='" . $status . "'
        where id =" . $id;
        pdo_execute($sql);
    }

    function loadone_productDetailtable($id){
        $sql = "SELECT * from product_detail where id = $id";
        $onefrompdt = pdo_query_one($sql);
        return $onefrompdt;
    }

    function update_tb_pdtdetail($id, $name_pdtdetail,$id_size, $id_color, $id_material, $image_pd, $quantity,$price, $status){
        $sql = "UPDATE product_detail set name_pdtdetail = '" . $name_pdtdetail . "', id_size ='" . $id_size . "', id_color ='" . $id_color . "', id_material ='" . $id_material . "', image_pd = '" . $image_pd . "', quantity = '" . $quantity . "',price = '" . $price . "', status ='" . $status . "'
        where id =" . $id;
        pdo_execute($sql);
    }

    function loadadd_product_fe(){
        $sql =  "select * from product where status = 'active'";
        $listsanpham=pdo_query($sql);
        return $listsanpham;  
    }

    function loadprice_pdtdetail($id_pdt){
        $sql = "SELECT price from product_detail where id_pdt = $id_pdt";
        $priceList=pdo_query($sql);
        return $priceList;
    }

    
    function loadadd_product_home(){
        $sql =  "SELECT * from product where status = 'active' order by RAND()  limit 3 ";
        $listsanphamHome=pdo_query($sql);
        return $listsanphamHome;  
    }

    //function update_product($id,$iddm,$tensp,$giasp,$mota,$hinh) {
        //if($hinh!="")
            //$sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id=".$id;
        //else 
            //$sql="update product set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
        //pdo_execute($sql);
    //}

?>