<div class="card">
    <div class="card-body">
        <div class="row ">
            <div class="">
                <h1 class="text-uppercase">THÊM MỚI <?php if (isset($titletable) && ($titletable != "")) echo $titletable; ?></h1>
            </div>
            <div class="">
                <form action="index.php?act=<?php if (isset($urladd) && ($urladd != "")) echo $urladd; ?>" method="post">

                    <div class="row mb10">
                        Mã <br>
                        <input type="text" name="id" disabled>
                    </div>

                    <div class="row">
                        Tên <br>
                        <input type="text" name="name">
                    </div>

                    <div class="row flex">
                        <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="THÊM MỚI">
                        <!-- <input type="reset" value="NHẬP LẠI"> -->
                        <a class="btn btn-primary m-1 w-25" href="index.php?act=<?php if (isset($urlactlist) && ($urlactlist != "")) echo $urlactlist; ?>">DANH SÁCH</a>
                    </div>


                </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                ?>
                    <div class="row alert alert-success" role="alert">
                        <?=$thongbao?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>