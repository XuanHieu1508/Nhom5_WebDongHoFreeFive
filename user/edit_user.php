<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white" style="font-weight: bold; font-size: 1.25rem;">
                    Cập nhật tài khoản
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                            extract($_SESSION['user']);
                        }
                    ?>
                    <form action="index.php?act=edit_user" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?=$email?>" required style="width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">User name</label>
                            <input type="text" class="form-control" id="user" name="user" value="<?=$user?>" required style="width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" value="<?=$pass?>" required style="width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?=$address?>" style="width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label">Điện thoại</label>
                            <input type="text" class="form-control" id="tel" name="tel" value="<?=$tel?>" style="width: 100%;">
                        </div>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <button type="submit" class="btn btn-primary" name="edit_user" style="color: white;">Cập nhật</button>
                        <button type="reset" class="btn btn-secondary">Nhập lại</button>
                    </form>
                    <?php if(isset($thongbao) && $thongbao!=""): ?>
                        <div class="alert alert-danger mt-3">
                            <?= $thongbao ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
