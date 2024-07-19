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
                    <input type="submit" name="themmoi"  value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao)&& ($thongbao!=""))echo $thongbao;
                ?>
                            
            </form>
            </div>
        </div>
    </div>
</div>
