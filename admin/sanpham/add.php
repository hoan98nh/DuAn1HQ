<div class="row ">
    <div class="row frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>

    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

            <div class="row ">
                Danh mục <br>
                <select name="iddm">
                    <option value="0" hidden>Mời bạn chọn</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                    ?>
                        <option value="<?= $id ?>"><?= $name_cate ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="row ">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>

            <div class="row ">
                Giá <br>
                <input type="text" name="giasp">
            </div>

            <div class="row ">
                Hình đại diện <br>
                <input type="file" name="hinh" id="">
            </div>

            <div class="row ">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="row flex">
                <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="btn btn-primary m-1 w-25" type="reset" value="NHẬP LẠI">
                <a class="btn btn-primary m-1 w-25" href="index.php?act=listcolor">DANH SÁCH</a>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>