<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "./sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- You can include a Topbar if needed -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
<div class="container-fluid">   
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="h3 mb-4 text-gray-800">Danh Sách Đơn Hàng</h1>
        </div>
    </div>

    <!-- Search Form and Table -->
    <div class="row">
        <div class="col-lg-12">
            <form action="index.php?act=listbill" method="post" class="mb-4">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="text" name="kyw" class="form-control mb-2" placeholder="Nhập mã đơn hàng">
                    </div>
                    <div class="col-auto">
                        <input type="submit" name="search_bill" class="btn btn-primary mb-2" value="OK">
                    </div>
                </div>
            </form>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh Sách Đơn Hàng</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Số lượng hàng</th>
                                <th>Giá</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thao tác</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $update_bill = "index.php?act=update_bill&id=" . $id;
                                $delete_bill = "index.php?act=delete_bill&id=" . $id;
                                $kh = $bill["bill_name"] . '
                                <br>' . $bill["bill_email"] . '
                                <br>' . $bill["bill_address"] . '
                                <br>' . $bill["bill_tel"];
                                $ttdh = get_ttdh($bill['bill_status']);
                                $count = loadall_cart_count($bill['id']);
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>' . $bill['id'] . '</td>
                                        <td>' . $kh . '</td>
                                        <td>' . $count . '</td>
                                        <td>' . $bill['total'] . '</td>
                                        <td>' . $ttdh . '</td>
                                        <td>' . $bill['ngay_dat_hang'] . '</td>
                                        <td>
                                            <a href="' . $delete_bill . '" class="btn btn-danger btn-sm">Xóa</a>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group">
                <a href="index.php?act=listbill" class="btn btn-primary">Tất cả đơn hàng</a>
            </div>
        </div>
    </div>
</div>

<!-- Include JS for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/sb-admin-2.min.js"></script>
