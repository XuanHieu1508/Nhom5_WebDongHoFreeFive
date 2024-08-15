<div class="boxtrai mr">
    <div class="boxtitle bg-primary text-white p-3 mb-3">Giỏ hàng</div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <?php
                view_cart(1);
                ?>
            </tr>
        </table>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="index.php?act=bill" class="custom-btn order-btn w-100">Đồng ý đặt hàng</a>
        </div>
        <div class="col-md-6">
            <a href="index.php?act=deletecart" class="custom-btn delete-btn w-100">Xóa giỏ hàng</a>
        </div>
    </div>
</div>
<style>.custom-btn {
    display: block;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-decoration: none;
}

.order-btn {
    background-color: #28a745;
    color: white;
}

.order-btn:hover {
    background-color: #218838;
    transform: scale(1.05);
}

.delete-btn {
    background-color: #dc3545;
    color: white;
}

.delete-btn:hover {
    background-color: #c82333;
    transform: scale(1.05);
}
</style>