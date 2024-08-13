<?php
ob_start();
session_start();
include "model/sanpham.php";
include "model/user.php";
include "model/pdo.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();

if ((isset($_GET['act']) && ($_GET['act']) != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $id_danh_muc = $_GET['iddm'];
            } else {
                $id_danh_muc = 0;
            }
            $dssp = loadall_sanpham($keyword, $id_danh_muc);
            $ten_dm = load_ten_dm($id_danh_muc);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $onesp = loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $id_danh_muc);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['register'])) {
                
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_user($email, $user, $pass);
                $thongbao = "Đã đăng kí thành công vui lòng đăng nhập để sử dụng hệ thống";
            }
            include "user/dangki.php";
            break;
        case 'dangnhap':
            if (isset($_POST['login'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header('Location: index.php');
                    // $thongbao = "Đã đăng nhập thành công";
                } else {
                    $thongbao = "Thông tin đăng nhập tài khoản hoặc mật khẩu không chính xác";
                }
            }
                include "user/dangnhap.php";
                break;
    }}else {
        include "view/home.php";
    }
    include "view/footer.php";
ob_end_flush();