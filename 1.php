<?php

session_start();
$_SESSION['mycart']=array(); // lưu trữ khởi tạo biến cho 1 session
$sp1=[1,"san pham1",100,2];
$sp2=[2,"san pham2",200,3];
$cart=[];

$cart[]=$sp1;
$cart[]=$sp2;

$_SESSION['mycart']=$cart; // gán 1 giá trị mảng cho 1 biến sesion
 echo '<h1>Session đã tạo</h1>';
echo '<a href="2.php">Show dữ liệu session</a>';
?>