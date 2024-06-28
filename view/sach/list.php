
<div class="row frmtitle mb"><h1>DANH SÁCH LOẠI SÁCH</h1></div>

<button>    
    <a href="?act=them-sach">Thêm mới</a>
</button> <br><br>

<div class="row formcontent">
    <div class="row mb10 frmdsloai">
        <table border="1">
            <tbody>
                <th>Id</th>
                <th>Tên sách</th>
                <th>Hình ảnh</th>
                <th>Id nhà xuất bản</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tbody>

            <tbody>
                <?php foreach ($listsach as $sach):
                    extract($sach);
                ?>
                
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $ten_sach ?></td>
                    <td>
                        <img src="img/<?= $hinh_anh?>" style="width: 70px; height:105px;" alt="">
                    </td>
                    <td><?=$id_nha_xuat_ban?></td>
                    <td><?=$gia?></td>
                    <td>
                        <button>
                            <a href="?act=sua-sach&id=<?=$id?>">Sửa</a>
                        </button>
                        <button>
                            <a href="?act=xoa-sach&id=<?=$id?>">Xóa</a>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>