<div class="row ">
    <div class="row frmtitle"><H1>THÊM MỚI SẢN PHẨM</H1></div>

    <div class="row frmcontent">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

        <div class="row mb10">
            Danh mục <br>
        <select name="iddm">
        <?php 
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">"'.$name.'"</option>';
            }
            ?>
                            
        </select>
        </div>

        <div class="row mb10">
            Tên sản phẩm <br>
        <input type="text" name="tensp">
        </div>

        <div class="row mb10">
            Giá <br>
        <input type="text" name="giasp">
        </div>

        <div class="row mb10">
            Hình <br>
        <input type="file" name="hinh" id="">
        </div>

        <div class="row mb10">
            Mô tả <br>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="row mb10">
            <input type="submit" name="themmoi" value="THÊM MỚI">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listcolor"><input type="button" value="DANH SÁCH"></a>
            </div>

            <?php
        if (isset($thongbao)&& ($thongbao!="")) echo $thongbao;
        ?>

    </form>
    </div>
</div>