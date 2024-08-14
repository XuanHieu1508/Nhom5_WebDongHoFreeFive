<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Nav Item - Pages Collapse Menu -->
            <?php include "./sidebar.php" ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Include Topbar here if needed -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Card -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục</h6>
                        </div>
                        <div class="card-body">
                            <?php
                                if (is_array($dm)) {
                                    extract($dm);
                                }
                            ?>
                            <form action="index.php?act=updatedm" method="post">
                                <div class="form-group">
                                    <label for="maloai">Mã loại</label>
                                    <input type="text" class="form-control" id="maloai" name="maloai" value="<?php if(isset($id) && ($id>0)) echo $id; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tenloai">Tên loại</label>
                                    <input type="text" class="form-control" id="tenloai" name="tenloai" value="<?php if(isset($name) && ($name!="")) echo $name; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id; ?>">
                                    <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
                                    <a href="index.php?act=listdm" class="btn btn-secondary">Danh sách</a>
                                </div>
                                <?php
                                    if (isset($thongbao) && ($thongbao != "")) {
                                        echo '<div class="alert alert-info">' . $thongbao . '</div>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->