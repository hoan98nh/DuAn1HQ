
<?php

    function showcolumn($tablename){
        $sql="SHOW COLUMNS FROM $tablename";
        $listcol=pdo_query($sql);
        return $listcol;
    }

    function insert_forsingletable($tablename, $colname, $colvalue){
        $sql="insert into $tablename($colname, status)values('$colvalue', 'active')";
        pdo_execute($sql);  
    }

    function delete_forsingletable($tablename, $id){
        // $sql ="delete  from danhmuc where id = ".$id;
        $sql="update $tablename set status = 'deactive' where id=".$id;
        pdo_execute($sql);
    }

    function loadall_forsingletable($tablename){
        $sql =" select * from $tablename where status = 'active' order  by id asc";
        $listforsingletable=pdo_query($sql);
        return $listforsingletable;
    }

    function loadone_forsingletable($tablename, $id){
        $sql ="select * from $tablename where status = 'active' and id = ".$id;
        $singletable=pdo_query_one($sql);
        return $singletable;
    }

    function update_forsingletable($tablename, $colname,$colvalue, $id){
        $sql="update $tablename set $colname='".$colvalue."' where id=".$id;
        pdo_execute($sql);
    }

?>