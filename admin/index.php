
<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/singeletable.php";
include "header.php";

// body
?>
<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_cate = $_POST['name_cate'];
                insert_category($name_cate);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'lisdm':
            $listdanhmuc = loadall_category();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }
            $listdanhmuc = loadall_category();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_category($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name_cate = $_POST['name_cate'];
                $id = $_POST['id'];
                $sql = "update category set name='" . $name_cate. "' where id=" . $id;
                pdo_execute($sql);
                $thongbao = "Cập nhật thành công";
            }
            $sql = "select * from category order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;

            // Màu sắc listcolor
        case 'addcolor':
            $urladd = "addcolor";
            $titletable = "màu";
            $urlactlist = "listcolor";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten = $_POST['name'];
                insert_forsingletable("color", "name_color", $ten);
                $thongbao = "Them thanh cong";
            }
            include "./singeletable/add.php";
            break;

        case 'listcolor':
            $titletable = "màu";
            $listcol =  showcolumn("color");
            $n_table = "color";
            $urladd = "addcolor";
            $listforsingletable = loadall_forsingletable("color");
            include "./singeletable/list.php";
            break;

        case 'xoacolor':

            // khai báo
            $titletable = "màu";
            $listcol =  showcolumn("color");
            $n_table = "color";
            $urladd = "addcolor";

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_forsingletable("color", $_GET['id']);
            }
            $listforsingletable = loadall_forsingletable("color");
            include "./singeletable/list.php";
            break;

        case 'suacolor':
            // khai báo
            $titletable = "màu";
            $n_table = "color";
            $one_col = "name_color";
            $urlactlist = "listcolor";
            $urlupdate = "updatecolor";

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $onecall = loadone_forsingletable("color", $_GET['id']);
            }
            include "./singeletable/update.php";
            break;

        case 'updatecolor':
            // khai báo
            $titletable = "màu";
            $listcol =  showcolumn("color");
            $n_table = "color";
            $urladd = "addcolor";
            $listforsingletable = loadall_forsingletable("color");
            $colname = "name_color";

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                // $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
                // pdo_execute($sql);
                $update = update_forsingletable("color", $colname, $name, $id);
                $thongbao = "Cập nhật thành công";
            }
            $listforsingletable = loadall_forsingletable("color");
            include "./singeletable/list.php";
            break;
            
            /*SAN PHAM */
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Them thanh cong";
            }

            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            // load tất cả dữ liệu lên
            // if(isset($_POST['listok'])&&($_POST['listok'])) { 
            //     $kyw=$_POST['kyw'];
            //     $iddm=$_POST['iddm'];

            // } else {
            //     $kyw='';
            //     $iddm=0;
            // }
            // $listdanhmuc=loadall_danhmuc();
            // $listsanpham=loadall_sanpham($kyw,$iddm);

            $listsanpham = loadall_product();

            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);

            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();

            include "sanpham/update.php";
            break;


        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật  thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan("", 0);
            include "binhluan/list.php";
            break;

        case 'suabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_binhluan($_GET['id']);
            }

            $listbinhluan = loadall_binhluan("", 0);

            include "sanpham/update.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

?>
<?php
// footer
include "footer.php"

?>
