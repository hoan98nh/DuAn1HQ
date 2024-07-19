<?php

if (is_array($onecall)) {
    extract($onecall);
}

?>
<div class="card">
    <div class="card-body">
        <div class="row card-title">
            <H1>CẬP NHẬP</H1>
        </div>

        <div class="row frmcontent">
            <form action="index.php?act=<?=$urlupdate?>" method="post">

                <div class="row mb10">
                    ID
                    <input type="text" name="id" value="<?= $id ?>" readonly>
                </div>

                <div class="row mb10">
                    Tên <br>
                    <input type="text" name="name" value="<?= $$one_col ?>">
                </div>

                <div class="row mb10">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=<?php if (isset($urlactlist) && ($urlactlist != "")) echo $urlactlist; ?>"><input type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                ?>
            </form>

        </div>
    </div>
</div>