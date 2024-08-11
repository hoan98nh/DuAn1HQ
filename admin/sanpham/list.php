<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="mb">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>

            <div>
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" id="">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>

                        <?php
                        // foreach ($listdanhmuc as $danhmuc) {
                        //     extract($danhmuc);
                        //     echo '<option value="' . $id . '">' . $name . '</option>';
                        // }
                        ?>

                    </select>
                    <input type="submit" name="listok" value="Tm kiếm">
                </form>
                <div>
                    <a href="index.php?act=addsp" class="btn btn-primary m-1">Thêm sản phẩm mới</a>
                </div>
            </div>
            <!-- table -->
            <div class="">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="align-top text-nowrap">
                            <th scope="col">ID</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th class="" scope="col">Danh mục</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Mô tả sản phẩm</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <!-- <th scope="col"></th> -->
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        // $sql =  "select 
                        // product.id, product.name_product, category.name_cate, product.img_pdt, product.detail_product  
                        // from product
                        // inner join category on category.id = product.id_cate
                        // order by product.id asc";


                        foreach ($listsanpham as $sanpham) {
                            // var_dump($sanpham);
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;

                            $hinhpath = "../upload/" . $img_pdt;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height='100'>";
                            } else {
                                $hinh = "no picture";
                            }

                        ?>
                            <tr>
                                <td scope="row"><?= $id ?></td>
                                <td><?= $name_product ?></td>
                                <td><?= $name_cate ?></td>
                                <td><?= $hinh ?></td>
                                <td><?= $detail_product ?></td>
                                <td><?= ($status == "active") ? "Hoạt động" : "Không hoạt động" ?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary p-1 text-nowrap" data-bs-toggle="modal" data-bs-target="#modal<?= $id ?>">
                                        Chi tiết
                                    </button>
                                </td>
                                <td><a href="<?= $suasp ?>"><input type="button" class="btn btn-outline-link p-1 text-nowrap" value="Sửa"></a></td>
                                <!-- <td><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td> -->
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <div class="">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a class="btn btn-primary m-1 w-25" href="index.php?act=addsp">NHẬP THÊM</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
foreach ($listsanpham as $sanpham) {
    extract($sanpham);
    $idSP = $id;
?>
    <!-- Modal -->
    <div class="modal fade" id="modal<?= $idSP ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-fullscreen-md-down modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $name_product ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-top text-nowrap">
                                <th scope="col">ID</th>
                                <th scope="col">Tên phân loại</th>
                                <th scope="col">Size</th>
                                <th scope="col">Màu</th>
                                <th scope="col">Vật liệu</th>
                                <th scope="col">Hình</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <!-- <th scope="col"></th> -->
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            // $sql =  "select 
                            // product.id, product.name_product, category.name_cate, product.img_pdt, product.detail_product  
                            // from product
                            // inner join category on category.id = product.id_cate
                            // order by product.id asc";
                            $id_pdt = $id;
                            $listpdtdetail = loadall_product_detail($id_pdt);
                            // var_dump($listpdtdetail);
                            foreach ($listpdtdetail as $danhsachchitiet) {
                                // var_dump($sanpham);
                                extract($danhsachchitiet);
                                $suasp = "index.php?act=suachitietsp&id=" . $id;
                                // $xoasp = "index.php?act=xoasp&id=" . $id;

                                $hinhpath = "../upload/" . $image_pd;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='100'>";
                                } else {
                                    $hinh = "no picture";
                                }
                            ?>
                                <tr>
                                    <td scope="row"><?= $id ?></td>
                                    <td><?= $name_pdtdetail ?></td>
                                    <td><?= $name_size ?></td>
                                    <td><?= $name_color ?></td>
                                    <td><?= $name_material ?></td>
                                    <td><?= $hinh ?></td>
                                    <td><?= $quantity ?></td>
                                    <td><?= $price ?></td>
                                    <td><?= ($quantity == 0) ? "Hết hàng/" : "" ?> <?= ($status == "active") ? "Hoạt động" : "Không hoạt động" ?> </td>
                                    <td>
                                    </td>
                                    <td><a href="<?= $suasp ?>"><input type="button" class="btn btn-outline-link p-1 text-nowrap" value="Sửa"></a></td>
                                    <!-- <td><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td> -->
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" ><a class="text-white" href="index.php?act=addpdtdetail&idsp=<?=$idSP?>" >Thêm chi tiết sản phẩm</a></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>