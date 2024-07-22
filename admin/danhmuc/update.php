
<?php 

    if(is_array($dm)){
        extract($dm);
    }

?>

<div class="row">

    <div class="row frmtitle">
        <H1>CẬP NHẬP LOẠI HÀNG HÓA</H1>
    </div>

    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">

        <div class="row mb10">
            id <br>
        <input type="text" name="id" value="<?=$id?>" hidden>
        </div>

        <div class="row mb10">
            name_cate <br>
        <input type="text" name="name_cate" value="<?php if(isset($name_cate)&&($name_cate!="")) echo $name_cate ;?>">
        </div>

        <div class="">
        <input type="hidden" name="id"  value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
        <input type="submit" name="capnhat" value="CẬP NHẬT">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
        </div>

        <?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
        ?>
        </form>

    </div>
</div>
