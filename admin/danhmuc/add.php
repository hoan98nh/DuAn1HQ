<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="row frmtitle">
                <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=adddm" method="post">

                <div class="row mb10">
                    id <br>
                <input type="text" name="id" disabled>
                </div>
                            
                <div class="row mb10">
                    name_cate <br>
                    <input type="text" name="name_cate">
                </div>

                <div class="">
                <div class="row flex">
                    <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="THÊM MỚI">
                    <!-- <input type="reset" value="NHẬP LẠI"> -->
                    <a class="btn btn-primary m-1 w-25" href="index.php?act=lisdm<?php if (isset($urlactlist) && ($urlactlist != "")) echo $urlactlist; ?>">DANH SÁCH</a>
                    </div>
                </div>

                <?php
                if (isset($thongbao)&& ($thongbao!=""))echo $thongbao;
                ?>
                            
            </form>
            </div>
        </div>
    </div>
</div>
