<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fc;
        }
        .container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
        }
        .boxtrai {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .boxtitle {
            font-size: 1.25rem;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            color: #ffffff;
            background-color: #4e73df;
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-check-input {
            margin-right: 10px;
        }
        .btn {
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
        }
        .btn-success {
            background-color: #28a745;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="boxtrai mr">
            <form action="index.php?act=billconfirm" method="post">
                <!-- Thông tin khách hàng -->
                <div class="boxtitle">Thông tin khách hàng</div>
                <div class="row">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    <div class="col-md-6 mb-3">
                        <label for="user">Người đặt hàng</label>
                        <input type="text" class="form-control" name="user" value="<?= $name ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?= $address ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $email ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tel">Điện thoại</label>
                        <input type="tel" class="form-control" name="tel" value="<?= $tel ?>" required>
                    </div>
                </div>

                <!-- Phương thức thanh toán -->
                <div class="boxtitle">Phương thức thanh toán</div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="1" id="pttt1" required>
                            <label class="form-check-label" for="pttt1">
                                Thanh toán khi nhận hàng
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="2" id="pttt2" required>
                            <label class="form-check-label" for="pttt2">
                                Chuyển khoản ngân hàng
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="3" id="pttt3" required>
                            <label class="form-check-label" for="pttt3">
                                Thanh toán online
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Thông tin giỏ hàng -->
                <div class="boxtitle">Thông tin giỏ hàng</div>
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <?php
                        view_cart(0);
                        ?>
                    </table>
                </div>

                <!-- Nút xác nhận đặt hàng -->
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="btn btn-success w-100">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
