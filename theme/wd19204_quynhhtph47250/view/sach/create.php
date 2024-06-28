
<br><br>
<div class="row frmtitle"><h1>THÊM SÁCH </h1></div>

<div class="row frmcontent">
    <form action="" method="POST" enctype="multipart/form-data">

        <div style="margin-bottom: 16px;">
            <span>Tên sách</span>
            <input type="text" name="ten_sach">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Hình ảnh<br></span>
            <input type="file" name="img_upload">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Giá</span>
            <input type="text" name="gia">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhà xuất bản<br><br></span>
            <select name="id_nha_xuat_ban" id="">

                <?php 
                foreach ($dsnhaxuatban as $nhaxuatban) {
                    extract($nhaxuatban);
                    echo '<option value="'.$id_nha_xuat_ban.'">'.$ten_nha_xuat_ban.'</option>';
                    }
                ?>

            </select>
        </div>

        <div style="margin-bottom: 16px;">
            Mô tả<br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea>    </div>

        <button type="submit" name="submitForm">Tạo mới</button>

    </form>
</div>