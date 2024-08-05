
<?php

    function insert_taikhoan($email,$user,$pass, $address, $tel, $role) {
    $sql="insert into taikhoan(email,user,pass, address, tel, role) values('$email','$user','$pass', '$address', '$tel', $role)";
    pdo_execute($sql);
    }


    function checkuser($user,$pass) {
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."' ";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkUser1($user, $pass){
        $sql = "select * from user where username = '$user' && password = '$pass' " ;
        $userlogin = pdo_query_one($sql);
        return $userlogin;
    }

    function update_taikhoan($id,$user,$pass,$email,$address,$tel) {
            $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }

    function checkemail($email) {
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadall_taikhoan() {
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

?>