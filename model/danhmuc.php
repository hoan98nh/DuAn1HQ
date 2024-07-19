
<?php

    function insert_category($name_cate){
        $sql="insert into category(name_cate)values('$name_cate')";
        pdo_execute($sql);  
    }

    function delete_category($id){
        $sql ="delete  from category where id = ".$id;
        pdo_execute($sql);
    }

    function loadall_category(){
        $sql =" select id, name_cate from category";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_category($id){
        $sql ="select * from category where id = ".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_category($id,$name_cate){
        $sql="update category set name='".$name_cate."' when id=".$id;
        pdo_execute($sql);
    }

?>