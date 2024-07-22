<div class="card">
    <div class="card-body">
        <div class="row ">
            <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>
            
            <div class="row frmcontent">

                <div class="">
                    <table class="table table-striped">
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">id</th>
                        <th scope="col">name_cate</th>
                        <th scope="col">remove</th>
                        </tr>

                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                            
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name_cate.'</td>
                                <td> <a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                
                <div class="">
                <div class="row flex">
                    <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="Chọn tất cả">
                    <input class="btn btn-primary m-1 w-25" type="submit" name="themmoi" value="Xóa các mục đã chọn">
                    <a class="btn btn-primary m-1 w-25" href="index.php?act=adddm<?php if (isset($urlactlist) && ($urlactlist != "")) echo $urlactlist; ?>">Nhập thêm</a>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</div>