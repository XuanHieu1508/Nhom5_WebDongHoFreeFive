<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
        

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <?php include "./sidebar.php" ?>
        </ul>
        <?php
            if(is_array($sp)){
            extract($sp);
            }
            $hinhpath="../upload/".$img;
            if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
            }
            else{
                $hinh="No photo";
            }
        ?>
        <div class="card shadow mb-4">
        <div class="card-body">
                <h1>Sửa sản phẩm</h1>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <select name="id_danh_muc">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                </select>
                    <div class="row">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$namesp?>">
                    </div>
                    <div class="row">
                        Giá <br>
                        <input type="text" name="price" value="<?=$price?>">
                    </div>
                    <div class="row">
                        Ảnh <br>
                        <?=$hinh?> <br>
                       <input type="file" name="hinh" id="" >
                    </div>
                    <div class="row">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row">
                        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                        <input type="submit" name="cap_nhat" value="Cập nhật">
                        <!-- <input type="reset" value="Nhập lại"> -->
                        <a href="index.php?act=listsp"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
            <!-- Footer -->