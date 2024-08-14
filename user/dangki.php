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
    <h3 class="uppercase">Đăng kí</h3>
    <form id="registrationForm" action="index.php?act=dangky" method="post">
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="email">Email&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="email" name="email" id="email" />
            <span class="error-message" id="emailError"></span>
        </p>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="username">Tên tài khoản&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="user" id="user" />
            <span class="error-message" id="userError"></span>
        </p>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="pass" id="pass" />
            <span class="error-message" id="passError"></span>
        </p>
        <p class="form-row">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
            </label>
            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="9b460c0cdd" />
            <input type="hidden" name="_wp_http_referer" value="/tai-khoan/" />
            <button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="register">Đăng kí</button>
        </p>
        <p class="woocommerce-LostPassword lost_password">
            <a href="lost-password/index.html">Quên mật khẩu?</a>
        </p>
    </form>
</div>

<style>
.error-message {
    color: red;
    font-size: 12px;
}
</style>

<script>
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var email = document.getElementById('email').value;
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;

    var emailError = document.getElementById('emailError');
    var userError = document.getElementById('userError');
    var passError = document.getElementById('passError');

    emailError.textContent = '';
    userError.textContent = '';
    passError.textContent = '';

    var valid = true;

    if (!email) {
        emailError.textContent = 'Vui lòng nhập email.';
        valid = false;
    } else if (!validateEmail(email)) {
        emailError.textContent = 'Vui lòng nhập email hợp lệ.';
        valid = false;
    }

    if (!user) {
        userError.textContent = 'Vui lòng nhập tên tài khoản.';
        valid = false;
    }

    if (!pass) {
        passError.textContent = 'Vui lòng nhập mật khẩu.';
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
</script>

</div><!-- .account-login-container -->

</div>

						
												</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>


</main><!-- #main -->

