<div class="centered-container">
    <div class="boxtrai mr">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="text-center">Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>

        <?php if (isset($bill) && is_array($bill)) { extract($bill); } ?>
        <div class="card mb-4">
            <div class="card-header">
                Thông Tin Đơn Hàng
            </div>
            <div class="card-body">
                <ul>
                    <li>Mã đơn hàng: <?= $bill['id']; ?></li>
                    <li>Ngày đặt hàng: <?= $bill['ngay_dat_hang']; ?></li>
                    <li>Tổng đơn hàng: <?= $bill['total']; ?></li>
                    <li>Phương thức thanh toán: <?= $bill['bill_pttt']; ?></li>
                </ul>
            </div>
        </div>

        <form action="index.php?act=billconfirm" method="post">
            <div class="card mb-4">
                <div class="card-header">
                    Thông Tin Khách Hàng
                </div>
                <div class="card-body">
                    <div>
                        <label for="user">Người Đặt Hàng</label>
                        <input type="text" id="user" name="user" value="<?= $bill['bill_name']; ?>" required>
                    </div>
                    <div>
                        <label for="address">Địa chỉ</label>
                        <input type="text" id="address" name="address" value="<?= $bill['bill_address']; ?>" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?= $bill['bill_email']; ?>" required>
                    </div>
                    <div>
                        <label for="tel">Điện thoại</label>
                        <input type="tel" id="tel" name="tel" value="<?= $bill['bill_tel']; ?>" required>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Chi Tiết Giỏ Hàng
                </div>
                <div class="card-body">
                    <table>
                        <?php bill_chi_tiet($billct); ?>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.centered-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 20px;
    padding-bottom: 20px;
}

.boxtrai.mr {
    max-width: 700px;
    width: 100%;
    padding: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
    border-radius: 8px;
}

.card {
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    padding: 15px;
}

.card-header {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 8px;
}

.card-body ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.card-body ul li {
    padding: 3px 0;
    font-size: 0.95rem;
}

.card-body div {
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 0.95rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table td, table th {
    padding: 8px;
    border: 1px solid #ddd;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .boxtrai.mr {
        padding: 10px;
    }

    .card {
        padding: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
        padding: 6px;
        font-size: 0.9rem;
    }

    table td, table th {
        padding: 6px;
    }
}
</style>
