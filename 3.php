<?php
    session_start();
    session_destroy(); 

    echo '<h1>Session đã hủy</h1>';
    echo '<a href="1.php">Khởi tạo dữ liệu session</a>';
    echo '<a href="2.php">show session</a>';



?>