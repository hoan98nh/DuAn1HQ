<?php
if (is_array($onefrompdt)) {
    extract($onefrompdt);
}
$hinhpath = "../upload/" . $image_pd;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no picture";
}
// var_dump($onefrompdt);
?>

<div class="row">
    <div class="row frmtitle mb">
        <h1>CẬP NHẬT CHI TIẾT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatespdetail" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="id" class="form-label">ID chi tiết sản phẩm</label>
                <input class="form-control" type="text" name="id" value="<?= $_GET['id'] ?>" readonly>
            </div>

            <div class="row mb-3">
                <label for="name_pdtdetail" class="form-label">Tên phân loại</label>
                <input class="form-control" type="text" name="name_pdtdetail" value="<?= $name_pdtdetail ?>">
            </div>
            <div class="row mb-3">
                <label for="id_color" class="form-label">Màu sắc</label>
                <select name="id_color" class="form-select form-select-md ">

                    <!-- <option value="0" selected>Tất cả</option> -->
                     <?=(($id_color == "")|| ($id_color == 0))?"<option value='0' selected> Mời bạn chọn</option>":""?>
                    <?php
                    foreach ($listcolor as $colors) {
                        extract($colors);
                    ?>
                        <option value="<?= $id ?>" <?=($id == $id_color)?"selected":""?> ><?= $name_color ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            <div class="row mb-3">
                <label for="id_size" class="form-label">Size</label>
                <select name="id_size" class="form-select form-select-md ">

                    <!-- <option value="0" selected>Tất cả</option> -->
                    <?=(($id_size == "")|| ($id_size == 0))?"<option value='0' selected> Mời bạn chọn</option>":""?>
                    <?php
                    foreach ($listsize as $sizes) {
                        extract($sizes);
                    ?>
                        <option value="<?= $id ?>" <?=($id == $id_size)?"selected":""?> ><?= $name_size ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            <div class="row mb-3">
                <label for="id_material" class="form-label">Vật liệu</label>
                <select name="id_material" class="form-select form-select-md ">

                    <!-- <option value="0" selected>Tất cả</option> -->
                    <?=(($id_material == "")|| ($id_material == 0))?"<option value='0' selected> Mời bạn chọn</option>":""?>
                    <?php
                    foreach ($listmaterial as $materials) {
                        extract($materials);
                    ?>
                        <option value="<?= $id ?>" <?=($id == $id_material)?"selected":""?> ><?= $name_material ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            <div class="row mb-3">
                <label for="hinh" class="form-label">Hình Sản phẩm</label>
                <input class="form-control" type="file" name="hinh" id="">
                <input class="form-control" type="text" name="old_img" id="" value="<?=$image_pd?>" hidden>
                <div>
                    <?= $hinh ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input class="form-control" type="text" name="quantity" value="<?= $quantity ?>">
            </div>

            <div class="row mb-3">
                <label for="price" class="form-label">Giá</label>
                <input class="form-control" type="text" name="price" value="<?= $price ?>">
            </div>

            <div class="row mb-3">
                <label for="status" class="form-label">Trạng thái hoạt động</label>
                <select name="status" class="form-select form-select-md ">

                    <option value="active" <?= ($status == "active") ? "selected" : "" ?>>Hoạt động</option>
                    <option value="deactive" <?= ($status == "deactive") ? "selected" : "" ?>>Không hoạt động</option>

                </select>
            </div>

            <div class="row mb-3 d-flex">
                <div class="px-0 text-end">
                    <a class="ps-0" href="index.php?act=listsp"><input class="btn btn-primary m-1 w-25" type="button" value="Danh sách"></a>
                    <input class="btn btn-primary m-1 w-25" type="submit" name="capnhat" value="Cập nhật">
                </div>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>