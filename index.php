
<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/sach.php";


// if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

// $spnew=loadall_sanpham_home();
// $dsdm=loadall_danhmuc();
// $dstop10=loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // case 'gioithieu':
            //     include "view/gioithieu.php";
            //     break;

            // case 'lienhe':
            //     include "view/lienhe.php";
            //     break;

            // case 'sanpham':
            //     if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            //         $kyw = $_POST['kyw'];
            //     } else {
            //         $kyw = "";
            //     }
            //     if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
            //         $iddm = $_GET['iddm'];
            //     } else {
            //         $iddm = 0;
            //     }
            //     $dssp = loadall_sanpham($kyw, $iddm);
            //     $tendm = loadone_ten_dm($iddm);
            //     include "view/sanpham.php";

            //     break;

            // case 'sanphamct':
            //     if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
            //         $id = $_GET['idsp'];
            //         $onesp = loadone_sanpham($id);
            //         extract($onesp);
            //         $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
            //         include "view/sanphamct.php";
            //     } else {
            //         include "view/sanphamct.php";
            //     }
            //     break;

            // case 'dangky':
            //     if (isset($_POST['dangky']) && ($_POST['dangky'])) {
            //         $email = $_POST['email'];
            //         $user = $_POST['user'];
            //         $pass = $_POST['pass'];
            //         $address = '';
            //         $tel = '';
            //         $role = 1;
            //         insert_taikhoan($email, $user, $pass, $address, $tel, $role);
            //         $thongbao = "đã đăng ký thành công. Vui lòng đăng nhập để vào shop";
            //     }
            //     include "view/taikhoan.php/dangky.php";
            //     break;

            // case 'dangnhap':
            //     if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
            //         $user = $_POST['user'];
            //         $pass = $_POST['pass'];
            //         $checkuser = checkuser($user, $pass);
            //         if (is_array($checkuser)) {
            //             $_SESSION['user'] = $checkuser;
            //             // $thongbao="đã đăng nhập thành công";
            //             header('Location: index.php');
            //         } else {
            //             $thongbao = "TK ko tồn tại vui lòng kiểm tra hoặc đăng ký!!!";
            //         }
            //     }
            //     include "view/taikhoan.php/dangky.php";
            //     break;

            // case 'edit_taikhoan':
            //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            //         $user = $_POST['user'];
            //         $pass = $_POST['pass'];
            //         $email = $_POST['email'];
            //         $address = $_POST['address'];
            //         $tel = $_POST['tel'];
            //         $id = $_POST['id'];
            //         update_taikhoan($id, $user, $pass, $email, $address, $tel);
            //         $_SESSION['user'] = checkuser($user, $pass);
            //         header('Location: index.php?act=edit_taikhoan');
            //     }
            //     include "view/taikhoan.php/edit_taikhoan.php";
            //     break;

            // case 'quenmk':
            //     if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
            //         $email = $_POST['email'];
            //         $checkemail = checkemail($email);
            //         if (is_array($checkemail)) {
            //             $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
            //         } else {
            //             $thongbao = "email này khum tồn tại!!!";
            //         }
            //     }
            //     include "view/taikhoan.php/quenmk.php";
            //     break;


            // case 'thoat':
            //     session_unset();
            //     header('Location: index.php');
            //     break;

            // case 'addtocart':
            //     if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
            //         $id = $_POST['id'];
            //         $name = $_POST['name'];
            //         $img = $_POST['img'];
            //         $price = $_POST['price'];
            //         $soluong = 1;
            //         $ttien = $soluong * $price;
            //         $spadd = [$id, $name, $img, $price, $soluong, $ttien];
            //         array_push($_SESSION['mycart'], $spadd);
            //     }
            //     include "view/cart/viewcart.php";
            //     break;

            // case 'delcart':
            //     if (isset($_GET['idcart'])) {
            //         array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            //     } else {
            //         $_SESSION['mycart'] = [];
            //     }

            //     header('Location: index.php?act=viewcart');
            //     break;

        case 'shop':
            $listsanpham = loadadd_product_fe();
            include "./view/shop.php";
            break;

        case 'produc_detail':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = loadone_producttable($_GET['id']);
                // var_dump($product);
                include "./view/single-product.php";
            } else {
                header("Location: index.php");
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = loadone_ten_dm($iddm);
            include "view/sanpham.php";

            break;

        case 'loginpage':
            unset($_SESSION["error"]);
            include "./view/login.php";
            break;

        case 'login':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                unset($_SESSION["error"]);
                $checkUser = checkUser1($user, $pass);
                // var_dump($checkUser);
                // var_dump(checkUser1($user, $pass));
                if ($checkUser == true) {
                    $_SESSION["username"] = $checkUser['username'];
                    $_SESSION["id"] = $checkUser['id'];
                    $_SESSION["role"] = $checkUser['id_role'];
                    header("Location: index.php?act=logined");
                } else {
                    $error = "Thông tin đăng nhập không đúng";
                    $_SESSION["error"] = $error;
                    header("Location: index.php?act=loginedFail");
                }
            }
            break;
        case "logined":
            header("Location: index.php");
            break;
        case "loginedFail":
            include "./view/login.php";
            break;
        case "logout":
            unset($_SESSION["username"]);
            unset($_SESSION["id"]);
            unset($_SESSION["role"]);

            header("Location: index.php");
            break;

        case 'signuppage':
            unset($_SESSION["error"]);
            include "./view/signup.php";
            break;

        case 'signup':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $sdt = $_POST['tel'];
                $email = $_POST['email'];

                unset($_SESSION["error"]);
                $checkEmail = checkemail($email);
                if ($checkEmail == true) {
                    $error = "Email đã được sử dụng";
                    $_SESSION["error"] = $error;
                    header("Location: index.php?act=signedupFail");
                } else {
                    $checkuserName = checkuserName($username);
                    if ($checkuserNam == true) {
                        $error = "Tên đăng nhập đã được sử dụng";
                        $_SESSION["error"] = $error;
                        header("Location: index.php?act=signedupFail");
                    } else {
                        insert_userClient($username, $password, $email, $phone_number);
                        header("Location: index.php?act=signed");
                    }
                }
            }
            break;

        case "signed":
            header("Location: index.php?act=loginpage");
            break;
        case "signedupFail":
            include "./view/signup.php";
            break;

        case "contact":
            include "view/contact.php";
            break;
            // case 'viewcart':
            //     include "view/cart/viewcart.php";
            //     break;

        case 'cart':
            include "./view/cart.php";
            break;

        case 'checkout':
            $nameRecive = "";
            $addressRecive = "";
            $emailRecive = "";
            $telRecive = "";
            if (isset($_SESSION["id"]) && ($_SESSION["id"] != "")) {
                $one_user = loadone_user($_SESSION["id"]);
                extract($one_user);
                $nameRecive = $username;
                $addressRecive = $address;
                $emailRecive =  $email;
                $telRecive = $phone_number;
            }
            include "./view/checkout.php";
            break;

        case 'thankyou':
            include "./view/thankyou.php";
            break;


        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>