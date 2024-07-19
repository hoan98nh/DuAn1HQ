<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
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

                <table class="table table-bordered">
                    <tr>
                        <th scope="col">product.id</th>
                        <th scope="col">product.name_product</th>
                        <th scope="col">category.name_cate</th>
                        <th scope="col">product.img_pdt</th>
                        <th scope="col">product.detail_product</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>

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
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a></td>
                            <td><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <div class="">
                    <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>

            </div>
        </div>
    </div>
</div>