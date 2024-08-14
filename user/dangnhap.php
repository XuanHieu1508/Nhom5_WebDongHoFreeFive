<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Dummy credentials for demonstration purposes
    $correct_username = "user";
    $correct_password = "password";

    if ($username == $correct_username && $password == $correct_password) {
        // Redirect to the dashboard or some other page
        header("Location: dashboard.php");
    } else {
        // Set an error message
        $error_message = "Tên tài khoản hoặc mật khẩu không đúng.";
    }
}
?>
<!-- .header-bottom -->

<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div><!-- .header-bg-container -->   </div><!-- header-wrapper-->
</header>


<main id="main" class="">
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
				
				
														
						<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<div class="account-container lightbox-inner">

	
<div class="account-login-inner">
    <h3 class="uppercase">Đăng nhập</h3>
    <form id="loginForm" action="index.php?act=dangnhap" method="post">
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="username">Tên tài khoản&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="user" id="username" />
            <span class="error-message" id="usernameError"></span>
        </p>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="pass" id="password" autocomplete="current-password" />
            <span class="error-message" id="passwordError"></span>
        </p>
        <p class="form-row">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
            </label>
            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="9b460c0cdd" />
            <input type="hidden" name="_wp_http_referer" value="/tai-khoan/" />
            <button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
        </p>
        <p class="woocommerce-LostPassword lost_password">
            <a href="index.php?act=dangky">Bạn chưa có tài khoản? Đăng ký tại đây</a>
        </p>
        <span class="error-message" id="loginError"></span>
    </form>
</div>

<style>
.error-message {
    color: red;
    font-size: 12px;
}
</style>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var usernameError = document.getElementById('usernameError');
    var passwordError = document.getElementById('passwordError');

    usernameError.textContent = '';
    passwordError.textContent = '';

    var valid = true;

    if (!username) {
        usernameError.textContent = 'Vui lòng nhập tên tài khoản.';
        valid = false;
    }

    if (!password) {
        passwordError.textContent = 'Vui lòng nhập mật khẩu.';
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});
</script>

<!-- .login-inner -->

			
</div><!-- .account-login-container -->

</div>

						
												</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>


</main><!-- #main -->

