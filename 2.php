<?php

session_start();
if(isset($_SESSION['mycart'])) {
    foreach (($_SESSION['mycart']) as $cartt) { // $cartt là vừa đc tạo tùy ý giá trị trong mảng từ 0 -> ...
       echo 'MÃ sản phẩm: '.$cartt[0];    // showw ra giá trị ko có key truy xuất đến giá trị 0123...
       echo 'Tên sản phẩm: '.$cartt[1];     // nếu có key thì truy xuất tới biến key
       echo 'Giá sản phẩm: '.$cartt[2];
       echo 'Số lượng sản phẩm: '.$cartt[3]."<br>";

       
    } 
    echo '<h1>Session đã show</h1>'; 
}

    else {
        echo "session đã bị hủy";
    }

echo '<a href="1.php">Khởi tạo dữ liệu session</a> <br>'; 
echo '<a href="3.php">Hủy session</a>';

?>