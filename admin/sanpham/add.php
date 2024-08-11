<div class="row ">
    <div class="row frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>

    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="iddm" class="form-label">Danh mục</label>
                <select class="form-select form-select-md " name="iddm" require>
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

            <div class="row mb-3">
                <label for="tensp" class="form-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="tensp" require>
            </div>

            <div class="row mb-3">
                <label for="id_color" class="form-label">Màu sắc</label>
                <select class="form-select form-select-md" name="id_color">
                    <option value="0" hidden>Mời bạn chọn</option>
                    <?php
                    foreach ($listcolor as $colors) {
                        extract($colors);
                    ?>
                        <option value="<?= $id ?>"><?= $name_color ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="id_material" class="form-label">Nguyên liệu</label>
                <select class="form-select form-select-md" name="id_material">
                    <option value="0" hidden>Mời bạn chọn</option>
                    <?php
                    foreach ($listmaterial as $materials) {
                        extract($materials);
                    ?>
                        <option value="<?= $id ?>"><?= $name_material ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="id_size" class="form-label">Size</label>
                <select class="form-select form-select-md" name="id_size">
                    <option value="0" hidden>Mời bạn chọn</option>
                    <?php
                    foreach ($listsize as $sizes) {
                        extract($sizes);
                    ?>
                        <option value="<?= $id ?>"><?= $name_size ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="row mb-3">
                <label for="name_pdtdetail" class="form-label">Tên phân loại</label>
                <input class="form-control" type="text" name="name_pdtdetail" require>
            </div>

            <div class="row mb-3">
                <label for="giasp" class="form-label">Giá</label>
                <input class="form-control" type="text" name="giasp" require>
            </div>

            <div class="row mb-3">
                <label for="hinh" class="form-label">Hình sản phẩm</label>
                <input class="form-control" type="file" name="hinh" id="" require>
            </div>

            <div class="row mb-3">
                <label for="mota" class="form-label">Mô tả</label>
                <textarea class="form-control" name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb-3 flex">
                <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="THÊM MỚI">
                <!-- <input class="btn btn-primary m-1 w-25" type="reset" value="NHẬP LẠI"> -->
                <a class="btn btn-primary m-1 w-25" href="index.php?act=listsp">DANH SÁCH</a>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>