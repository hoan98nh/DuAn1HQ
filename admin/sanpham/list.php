<div class="container">
    <div class=" frmtitle mb">
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
    </div>

    <div class=" formcontent">
        <div class="row mb10 frmdsloai">

            <table class="table table-bordered">
                <tr>
                    <th  scope="col">product.id</th>
                    <th  scope="col">product.name_product</th>
                    <th  scope="col">category.name_cate</th>
                    <th  scope="col">product.img_pdt</th>
                    <th  scope="col">product.detail_product</th>
                    <th  scope="col"></th>
                    <th  scope="col"></th>
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

                    // $hinhpath = "../upload/" . $img;
                    // if (is_file($hinhpath)) {
                    //     $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    // } else {
                    //     $hinh = "no picture";
                    // }

                    echo ' <tr>
                <td scope="row">' . $id . '</td>
                <td>' . $name_product . '</td>
                <td>' . $name_cate . '</td>
                <td>' . $img_pdt . '</td>
                <td>' . $detail_product . '</td>
                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>  <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>  <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>

        <div class="row mb10">
            <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>

    </div>
</div>