<div class="card">
    <div class="card-body">
        <div class="row">
            <H1 class="text-uppercase">DANH SÁCH <?php if (isset($titletable) && ($titletable != "")) echo $titletable;?> </H1>
        </div>
        <div class="row">

            <div class="row">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <?php
                        $last_key = array_key_last($listcol);
                        foreach ($listcol as $key => $value) {
                            extract($value);
                            if ($key != $last_key) {
                        ?>
                                <th><?= $Field ?></th>
                        <?php
                            }
                        }
                        ?>
                        <th></th>
                    </tr>

                    <?php
                    foreach ($listforsingletable as $list) {
                        // var_dump($list);
                        extract($list);
                        if (isset($n_table) && ($n_table != "")){
                            $sua = "index.php?act=sua$n_table&id=" . $id;
                            $xoa = "index.php?act=xoa$n_table&id=" . $id;
                        }
                        else{
                            echo "ERROR";
                        };
                    ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <?php
                            $last_key = array_key_last($listcol);
                            foreach ($listcol as $key => $value) {
                                extract($value);
                                if ($key != $last_key) {
                            ?>
                                    <td><?= $$Field ?></td>
                            <?php
                                }
                            }
                            ?>
                            <td> <a href="<?=$sua?>"><input type="button" value="Sửa"></a> <a href="<?=$xoa?>"><input type="button" value="Xóa"></a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>

            <div class="row mb10">
                <!-- <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn"> -->
                <a href="index.php?act=<?php if (isset($urladd) && ($urladd != "")) echo $urladd; ?>"><input type="button" value="Nhập thêm"></a>
            </div>

        </div>
    </div>
</div>