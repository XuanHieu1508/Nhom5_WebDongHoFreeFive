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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><input type="checkbox" id="selectAll"></th>
                                            <th>ID sản phẩm</th>
                                            <th>Tên</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><input type="checkbox" id="selectAllFooter"></th>
                                            <th>ID sản phẩm</th>
                                            <th>Tên</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($listsanpham as $sanpham) {
                                            extract($sanpham);
                                            $capnhatsp = "index.php?act=capnhatsp&id=" . $id;
                                            $deletesp = "index.php?act=deletesp&id=" . $id;
                                            $hinhpath = "../upload/" . $img;
                                            if (is_file($hinhpath)) {
                                                $hinh = "<img src='" . $hinhpath . "' height='80' class='img-thumbnail'>";
                                            } else {
                                                $hinh = "No photo";
                                            }
                                            echo '
                                                <tr>
                                                    <td><input type="checkbox" class="productCheckbox"></td>
                                                    <td>' . $id . '</td>
                                                    <td>' . $namesp . '</td>
                                                    <td>' . $hinh . '</td>
                                                    <td>' . $price . '</td>
                                                    <td>
                                                        <a href="' . $capnhatsp . '" class="btn btn-warning btn-sm">Sửa</a>
                                                        <a href="' . $deletesp . '" class="btn btn-danger btn-sm delete-btn">Xóa</a>
                                                    </td>
                                                </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

    <!-- Script to add confirmation dialog for delete -->
    <script>
        $(document).ready(function() {
            $('.delete-btn').on('click', function(event) {
                event.preventDefault();
                var link = $(this).attr('href');
                if (confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')) {
                    window.location.href = link;
                }
            });
        });
    </script>
</body>

</html>
