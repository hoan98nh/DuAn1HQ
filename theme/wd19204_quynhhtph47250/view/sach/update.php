
<?php
    if(is_array($sach)) {
        extract($sach);
    }
    
    $hinhpath="../upload/".$hinh_anh;
    if(is_file($hinhpath)) {
        $hinh="<img src='".$hinhpath."' height='60'>";
    } else {
        $hinh="no picture";
    }
?>

<div class="row frmtitle mb"><h1>CẬP NHẬT SÁCH </h1></div>
    <div class="row formcontent">
        <form action="" method="POST" enctype="multipart/form-data">

            <div style="margin-bottom: 16px;">
                <span>Tên sách</span>
                <input type="text" name="ten_sach" >
            </div>

            <div style="margin-bottom: 16px;">
                <span>Hình ảnh</span>
                <input type="file" name="img_upload">
                <img src="img/<?=$hinh_anh?>" style="width:100px;height:150px;" alt="">
            </div>

            <div style="margin-bottom: 16px;">
                <span>Giá</span>
                <input type="text" name="gia" >
            </div>

            <div style="margin-bottom: 16px;">
                <span>Nhà xuất bản:</span>
                <select name="id_nha_xuat_ban" id="">

                    <?php 
                    foreach ($dsnhaxuatban as $nhaxuatban) {
                        extract($nhaxuatban);
                        if($dsnhaxuatban==$id_nha_xuat_ban) echo '<option value="'.$id_nha_xuat_ban.'" selected>'.$ten_nha_xuat_ban.'</option>';
                        else echo '<option value="'.$nhaxuatban['id_nha_xuat_ban'].'">'.$nhaxuatban['ten_nha_xuat_ban'].'</option>';
                    }
                    
                    ?>

                </select>
            </div>

            <div style="margin-bottom: 16px;">
                <span>Mô tả</span>
                <input name="mota">
            </div>

            <button type="submit" name="submitForm">Cập nhật</button><br><br>

        </form>
</div>