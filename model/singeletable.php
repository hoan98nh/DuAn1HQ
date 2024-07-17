
<?php

    function insert_forsingletable($tablename, $colname, $colvalue){
        $sql="insert into $tablename($colname)values('$colvalue')";
        pdo_execute($sql);  
    }

    function delete_forsingletable($tablename, $id){
        // $sql ="delete  from danhmuc where id = ".$id;
        $sql="update $tablename set status = 0 when id=".$id;
        pdo_execute($sql);
    }

    function loadall_forsingletable($tablename){
        $sql =" select * from $tablename order  by id asc";
        $listforsingletable=pdo_query($sql);
        return $listforsingletable;
    }

    function loadone_forsingletable($tablename, $id){
        $sql ="select * from $tablename where id = ".$id;
        $singletable=pdo_query_one($sql);
        return $singletable;
    }

    function update_forsingletable($tablename, $colname,$colvalu, $id){
        $sql="update $tablename set $colname='".$colvalu."' when id=".$id;
        pdo_execute($sql);
    }

?>