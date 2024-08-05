<div class="row">
    <div class="row frmtitle mb">
        <h1>THÊM CHI TIẾT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addpdtdetail&idsp=<?=$_GET['idsp']?>" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="id_pdt" class="form-label">ID sản phẩm</label>
                <input class="form-control" type="text" name="id_pdt" value="<?= $_GET['idsp'] ?>" readonly>
            </div>

            <div class="row mb-3">
                <label for="name_pdtdetail" class="form-label">Tên phân loại</label>
                <input class="form-control" type="text" name="name_pdtdetail" value="">
            </div>
            <div class="row mb-3">
                <label for="id_color" class="form-label">Màu sắc</label>
                <select name="id_color" class="form-select form-select-md ">
                    <option value='0' hidden selected> Mời bạn chọn</option>
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
                <label for="id_size" class="form-label">Size</label>
                <select name="id_size" class="form-select form-select-md ">

                    <option value='0' hidden selected> Mời bạn chọn</option>
                    <?php
                    foreach ($listsize as $sizes) {
                        extract($sizes);
                    ?>
                        <option value="<?= $id ?>" ><?= $name_size ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            <div class="row mb-3">
                <label for="id_material" class="form-label">Vật liệu</label>
                <select name="id_material" class="form-select form-select-md ">

                    <option value='0' hidden selected> Mời bạn chọn</option>
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
                <label for="hinh" class="form-label">Hình Sản phẩm</label>
                <input class="form-control" type="file" name="hinh" id="">
            </div>

            <div class="row mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input class="form-control" type="text" name="quantity" value="">
            </div>

            <div class="row mb-3">
                <label for="price" class="form-label">Giá</label>
                <input class="form-control" type="text" name="price" value="">
            </div>

            <!-- <div class="row mb-3">
                <label for="status" class="form-label">Trạng thái hoạt động</label>
                <select name="status" class="form-select form-select-md ">

                    <option value="active">Hoạt động</option>
                    <option value="deactive">Không hoạt động</option>

                </select>
            </div> -->

            <div class="row mb-3 d-flex">
                <div class="px-0 text-end">
                    <a class="ps-0" href="index.php?act=listsp"><input class="btn btn-primary m-1 w-25" type="button" value="Danh sách"></a>
                    <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="Thêm mới">
                </div>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>