<div class="row">
    <div class="row frmtitle mb">
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

    <div class="row formcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th>product.id</th>
                    <th> product.name_product</th>
                    <th>category.name_cate</th>
                    <th>product.detail_product</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
                
                // $sql =  "select 
                // product.id, product.name_product, category.name_cate, product.detail_product  
                // from product
                // inner join category on category.id = product.id_cate
                // order by product.id asc";


                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;

                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no picture";
                    }

                    echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $hinh . '</td>
                <td>' . $price . '</td>
                <td>' . $luotxem . '</td>
                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>  <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>

    </div>
</div>