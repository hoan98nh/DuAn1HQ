<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img_pdt;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no picture";
}
?>

<div class="row">
    <div class="row frmtitle mb">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="status" class="form-label">Danh mục sản phẩm</label>
                <select name="iddm" class="form-select form-select-md ">

                    <!-- <option value="0" selected>Tất cả</option> -->
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                    ?>
                        <option value="<?= $id ?>" <?=($id == $id_cate)?"selected":""?> ><?= $name_cate ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="row mb-3">
                <label for="id" class="form-label">ID Sản phẩm</label>
                <input class="form-control" type="text" name="id" value="<?= $_GET['id'] ?>" readonly>
            </div>

            <div class="row mb-3">
                <label for="tensp" class="form-label">Tên Sản phẩm</label>
                <input class="form-control" type="text" name="tensp" value="<?= $name_product ?>">
            </div>

            <div class="row mb-3">
                <label for="hinh" class="form-label">Hình Sản phẩm</label>
                <input class="form-control" type="file" name="hinh" id="">
                <input class="form-control" type="text" name="old_img" id="" value="<?=$img_pdt?>" hidden>
                <div>
                    <?= $hinh ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="mota" class="form-label">Mô tả Sản phẩm</label>
                <textarea class="form-control" name="mota" cols="30" rows="10"><?= $detail_product ?></textarea>
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