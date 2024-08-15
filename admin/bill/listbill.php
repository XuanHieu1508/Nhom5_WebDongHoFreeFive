<!-- Include SB Admin 2 Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

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
