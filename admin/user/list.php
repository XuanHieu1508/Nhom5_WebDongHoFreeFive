<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Account List</title>

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
                <!-- Include a Topbar if needed -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Account List -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><input type="checkbox" id="selectAll"></th>
                                            <th>ID Tài Khoản</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Điện thoại</th>
                                            <th>Vai trò</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th><input type="checkbox" id="selectAllFooter"></th>
                                            <th>ID Tài Khoản</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Điện thoại</th>
                                            <th>Vai trò</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($list_user as $user){
                                            extract($user);
                                            $deletetk="index.php?act=deletetk&id=".$id;
                                            echo ' 
                                                <tr>
                                                    <td><input type="checkbox" class="productCheckbox"></td>
                                                    <td>'.$id.'</td>
                                                    <td>'.$user.'</td>
                                                    <td>'.$pass.'</td>
                                                    <td>'.$email.'</td>
                                                    <td>'.$address.'</td>
                                                    <td>'.$tel.'</td>
                                                    <td>'.$role.'</td>
                                                    <td>
                                                        <a href="'.$deletetk.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Bạn có chắc chắn muốn xóa tài khoản này?\')">Xóa</a>
                                                    </td>
                                                </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <button class="btn btn-secondary" id="selectAllBtn">Chọn tất cả</button>
                                    <button class="btn btn-secondary" id="deselectAllBtn">Bỏ chọn tất cả</button>
                                    <button class="btn btn-danger" id="deleteSelectedBtn">Xóa các mục đã chọn</button>
                                </div>
                                <div>
                                    <a href="index.php?act=list" class="btn btn-primary">Nhập thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
            
            $('#selectAllBtn').click(function() {
                $('.productCheckbox').prop('checked', true);
            });
            $('#deselectAllBtn').click(function() {
                $('.productCheckbox').prop('checked', false);
            });
            $('#deleteSelectedBtn').click(function() {
                if (confirm('Bạn có chắc chắn muốn xóa các mục đã chọn?')) {
                    // Your delete logic here
                }
            });
        });
    </script>

</body>

</html>
