
<?php
ob_start();
session_start();
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
if (isset($_SESSION["username"]) && ($_SESSION["username"] != "")) {
    if ((isset($_SESSION["role"])) && ($_SESSION["role"] == 1)) {

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

                case 'listdm':
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
                        $sql = "update category set name_cate ='" . $name_cate . "' where id=" . $id;
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
                    // end

                    // material
                case 'addmaterial':
                    // khai bao
                    $urladd = "addmaterial"; //act add
                    $titletable = "nguyên liệu"; //title hiển thị
                    $urlactlist = "listmaterial"; //act list

                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $ten = $_POST['name'];
                        insert_forsingletable("material", "name_material", $ten);
                        $thongbao = "Them thanh cong";
                    }
                    include "./singeletable/add.php";
                    break;

                case 'listmaterial':

                    // khai báo
                    $titletable = "nguyên liệu"; //title hiển thị
                    $listcol =  showcolumn("material"); //show col của table
                    $n_table = "material"; //tên bảng
                    $urladd = "addmaterial"; //act add

                    $listforsingletable = loadall_forsingletable("material");
                    include "./singeletable/list.php";
                    break;

                case 'xoamaterial':

                    // khai báo
                    $titletable = "nguyên liệu"; //title hiển thị
                    $listcol =  showcolumn("material"); //show col của table
                    $n_table = "material"; //tên bảng
                    $urladd = "addmaterial"; //act add

                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_forsingletable("material", $_GET['id']);
                    }
                    $listforsingletable = loadall_forsingletable("material");
                    include "./singeletable/list.php";
                    break;

                case 'suamaterial':
                    // khai báo
                    $titletable = "nguyên liệu";
                    $n_table = "material";
                    $one_col = "name_material";
                    $urlactlist = "listmaterial";
                    $urlupdate = "updatematerial";

                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $onecall = loadone_forsingletable("material", $_GET['id']);
                    }
                    include "./singeletable/update.php";
                    break;

                case 'updatematerial':
                    // khai báo
                    $titletable = "nguyên liệu";
                    $listcol =  showcolumn("material");
                    $n_table = "material";
                    $urladd = "addmaterial";
                    $listforsingletable = loadall_forsingletable("material");
                    $colname = "name_material";

                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $name = $_POST['name'];
                        $id = $_POST['id'];
                        // $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
                        // pdo_execute($sql);
                        $update = update_forsingletable("material", $colname, $name, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listforsingletable = loadall_forsingletable("material");
                    include "./singeletable/list.php";
                    break;
                    // end

                    // size
                case 'addsize':
                    // khai bao
                    $urladd = "addsize"; //act add
                    $titletable = "kích cỡ"; //title hiển thị
                    $urlactlist = "listsize"; //act list

                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $ten = $_POST['name'];
                        insert_forsingletable("size", "name_size", $ten);
                        $thongbao = "Them thanh cong";
                    }
                    include "./singeletable/add.php";
                    break;

                case 'listsize':

                    // khai báo
                    $titletable = "kích cỡ"; //title hiển thị
                    $listcol =  showcolumn("size"); //show col của table
                    $n_table = "size"; //tên bảng
                    $urladd = "addsize"; //act add

                    $listforsingletable = loadall_forsingletable("size");
                    include "./singeletable/list.php";
                    break;

                case 'xoasize':

                    // khai báo
                    $titletable = "kích cỡ"; //title hiển thị
                    $listcol =  showcolumn("size"); //show col của table
                    $n_table = "size"; //tên bảng
                    $urladd = "addsize"; //act add

                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_forsingletable("size", $_GET['id']);
                    }
                    $listforsingletable = loadall_forsingletable("size");
                    include "./singeletable/list.php";
                    break;

                case 'suasize':
                    // khai báo
                    $titletable = "kích cỡ";
                    $n_table = "size";
                    $one_col = "name_size";
                    $urlactlist = "listsize";
                    $urlupdate = "updatesize";

                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $onecall = loadone_forsingletable("size", $_GET['id']);
                    }
                    include "./singeletable/update.php";
                    break;

                case 'updatesize':
                    // khai báo
                    $titletable = "kích cỡ";
                    $listcol =  showcolumn("size");
                    $n_table = "size";
                    $urladd = "addsize";
                    $listforsingletable = loadall_forsingletable("size");
                    $colname = "name_size";

                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $name = $_POST['name'];
                        $id = $_POST['id'];
                        // $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
                        // pdo_execute($sql);
                        $update = update_forsingletable("size", $colname, $name, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listforsingletable = loadall_forsingletable("size");
                    include "./singeletable/list.php";
                    break;
                    // end

                    /*SAN PHAM */
                case 'addsp':
                    $listdanhmuc = loadall_category();
                    $listcolor = loadall_forsingletable("color");
                    $listmaterial = loadall_forsingletable("material");
                    $listsize = loadall_forsingletable("size");

                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $id_cate = $_POST['iddm'];
                        $name_product = $_POST['tensp'];
                        $id_color = $_POST['id_color'];
                        $id_material = $_POST['id_material'];
                        $id_size = $_POST['id_size'];
                        $name_pdtdetail = $_POST['name_pdtdetail'];
                        $giasp = $_POST['giasp'];
                        $detail_product = $_POST['mota'];

                        // img
                        $img_pdt = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                        // insert_product($id_cate, $name_product, $detail_product);
                        insert_product_table($id_cate, $name_product, $img_pdt, $detail_product);
                        $id_pdt = lastId('product')[0][0];
                        insert_product_detail($name_pdtdetail, $id_pdt, $id_size, $id_color, $id_material, $img_pdt, $giasp);

                        $thongbao = "Thêm thành công";
                    }
                    // var_dump(lastId('product'));
                    // var_dump(lastId('product')[0][0]);
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
                        $sanpham = loadone_producttable($_GET['id']);
                    }
                    $listdanhmuc = loadall_category();

                    include "sanpham/update.php";
                    break;


                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $id_cate = $_POST['iddm'];
                        $name_product = $_POST['tensp'];
                        $detail_product = $_POST['mota'];
                        $status = $_POST['status'];

                        $img_pdt = $_FILES['hinh']['name'];
                        if ($img_pdt == "") {
                            $img_pdt = $_POST['old_img'];
                        } else {
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }

                        // insert_product($id_cate, $name_product, $detail_product);
                        update_tb_pdt($id, $id_cate, $name_product, $img_pdt, $detail_product, $status);
                        $thongbao = "Cập nhật  thành công";
                        header("Location: index.php?act=listsp");
                    }
                    // $listdanhmuc = loadall_category();
                    // $listsanpham = loadall_product("", 0);
                    // include "sanpham/list.php";
                    break;


                case 'addpdtdetail':
                    $listcolor = loadall_forsingletable("color");
                    $listmaterial = loadall_forsingletable("material");
                    $listsize = loadall_forsingletable("size");

                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $id_color = $_POST['id_color'];
                        $id_material = $_POST['id_material'];
                        $id_size = $_POST['id_size'];
                        $quantity = $_POST['quantity'];
                        $name_pdtdetail = $_POST['name_pdtdetail'];
                        $price = $_POST['price'];
                        $id_pdt = $_POST['id_pdt'];

                        // img
                        $image_pd = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                        // insert_product($id_cate, $name_product, $detail_product);
                        insert_product_detail2($name_pdtdetail, $id_pdt, $id_size, $id_color, $id_material, $image_pd, $quantity, $price);

                        $thongbao = "Thêm thành công";
                    }
                    include "sanpham/addpdtdetail.php";

                    break;

                case 'suachitietsp':
                    $listcolor = loadall_forsingletable("color");
                    $listmaterial = loadall_forsingletable("material");
                    $listsize = loadall_forsingletable("size");
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        // $sanpham = loadone_producttable($_GET['id']);
                        $onefrompdt = loadone_productDetailtable($_GET['id']);
                    }

                    include "sanpham/updatepdtd.php";
                    break;

                case 'updatespdetail':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $name_pdtdetail = $_POST['name_pdtdetail'];
                        $id_color = $_POST['id_color'];
                        $id_material = $_POST['id_material'];
                        $id_size = $_POST['id_size'];
                        $quantity = $_POST['quantity'];
                        $price = $_POST['price'];
                        $status = $_POST['status'];

                        $image_pd = $_FILES['hinh']['name'];
                        if ($image_pd == "") {
                            $image_pd = $_POST['old_img'];
                        } else {
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }

                        // insert_product($id_cate, $name_product, $detail_product);
                        update_tb_pdtdetail($id, $name_pdtdetail, $id_size, $id_color, $id_material, $image_pd, $quantity, $price, $status);
                        $thongbao = "Cập nhật  thành công";
                        header("Location: index.php?act=listsp");
                    }
                    // $listdanhmuc = loadall_category();
                    // $listsanpham = loadall_product("", 0);
                    // include "sanpham/list.php";
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

                case 'logout':
                    unset($_SESSION["username"]);
                    unset($_SESSION["id"]);
                    unset($_SESSION["role"]);

                    header("Location: ../index.php");
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
        include "footer.php";
    }
} else {
    header("Location: ../index.php");
}

?>