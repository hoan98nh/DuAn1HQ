
<?php

    function insert_category($name_cate){
        $sql="insert into category(name_cate, status)values('$name_cate', 'active')";
        pdo_execute($sql);  
    }

    function delete_category($id){
        // $sql ="delete  from category where id = ".$id;
        $sql="update category set status = 'deactive' where id=".$id;
        pdo_execute($sql);
    }

    function loadall_category(){
        $sql =" select id, name_cate from category where status = 'active' order by id asc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_category($id){
        $sql ="select * from category where status = 'active' and id = ".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_category($id,$name_cate){
        $sql="update category set name='".$name_cate."' where id=".$id;
        pdo_execute($sql);
    }

?>