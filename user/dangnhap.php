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
<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="vi" class="loading-site no-js"> <!--<![endif]-->

<!-- Mirrored from dongho.giaodienwebmau.com/tai-khoan/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 14:04:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="././xmlrpc.php" />

	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>My account &#8211; Trang web mới</title>
<meta name='robots' content='noindex,follow' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><link rel='dns-prefetch' href='http://use.fontawesome.com/' />
<link rel='dns-prefetch' href='http://maxcdn.bootstrapcdn.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Trang web mới &raquo;" href="././feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Trang web mới &raquo;" href="././comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/dongho.giaodienwebmau.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.24"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])?!1:!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55358,56760,9792,65039],[55358,56760,8203,9792,65039])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='cf7_style-css'  href='././wp-content/plugins/cf7-icons-and-labels/css/cf7_style578a.css?ver=4.9.24' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='././wp-content/plugins/contact-form-7/includes/css/styles3c21.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='devvn-quickbuy-style-css'  href='././wp-content/plugins/devvn-quick-buy/css/devvn-quick-buy4c71.css?ver=2.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='././wp-content/plugins/woocommerce/assets/css/select2cd70.css?ver=3.8.3' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='dashicons-css'  href='././wp-includes/css/dashicons.min578a.css?ver=4.9.24' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-ionicons-css'  href='././././maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min578a.css?ver=4.9.24' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-icons-css'  href='././wp-content/themes/flatsome/assets/css/fl-icons6de8.css?ver=3.3' type='text/css' media='all' />
<link rel='stylesheet' id='mm_icomoon-css'  href='././wp-content/plugins/mega_main_menu/framework/src/css/icomoone7f3.css?ver=2.1.7' type='text/css' media='all' />
<link rel='stylesheet' id='mmm_mega_main_menu-css'  href='././wp-content/plugins/mega_main_menu/src/css/cache.skin4aac.css?ver=1552787045' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-main-css'  href='././wp-content/themes/flatsome/assets/css/flatsome12f9.css?ver=3.10.0' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-shop-css'  href='././wp-content/themes/flatsome/assets/css/flatsome-shop12f9.css?ver=3.10.0' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-style-css'  href='././wp-content/themes/web-khoi-nghiep/style6aec.css?ver=3.0' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-googlefonts-css'  href='http://fonts.googleapis.com/css?family=Quicksand%3Aregular%2Cregular%2Cregular%2C700%2Cregular&amp;display=swap&amp;ver=3.9' type='text/css' media='all' />
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Rất tiếc, sản phẩm này hiện không tồn tại. Hãy chọn một phương thức kết hợp khác.</p>
</script>
<script type='text/javascript' src='././wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='././wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/dongho.giaodienwebmau.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-includes/js/zxcvbn-async.min5152.js?ver=1.0'></script>
<link rel='https://api.w.org/' href='././wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="././xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="././wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.24" />
<meta name="generator" content="WooCommerce 3.8.3" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='././index2dc4.html?p=13' />
<link rel="alternate" type="application/json+oembed" href="././wp-json/oembed/1.0/embeddb05.json?url=https%3A%2F%2Fdongho.giaodienwebmau.com%2Ftai-khoan%2F" />
<link rel="alternate" type="text/xml+oembed" href="././wp-json/oembed/1.0/embed081f?url=https%3A%2F%2Fdongho.giaodienwebmau.com%2Ftai-khoan%2F&amp;format=xml" />
<style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style><!--[if IE]><link rel="stylesheet" type="text/css" href="https://dongho.giaodienwebmau.com/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://dongho.giaodienwebmau.com/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name='robots' content='noindex,follow' />
<style id="custom-css" type="text/css">:root {--primary-color: #000000;}.full-width .ubermenu-nav, .container, .row{max-width: 1200px}.row.row-collapse{max-width: 1170px}.row.row-small{max-width: 1192.5px}.row.row-large{max-width: 1230px}.header-main{height: 100px}#logo img{max-height: 100px}#logo{width:142px;}.header-bottom{min-height: 44px}.header-top{min-height: 30px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 150px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.header-bg-color, .header-wrapper {background-color: rgba(255,255,255,0.9)}.header-bottom {background-color: #ffffff}.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #000000;}/* Color !important */[data-text-color="primary"]{color: #000000!important;}/* Background Color */[data-text-bg="primary"]{background-color: #000000;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #000000;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #000000}.nav-tabs > li.active > a{border-top-color: #000000}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #000000 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #000000 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #000000;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button{ background-color:#916841; }[data-text-bg="secondary"]{background-color: #916841;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #916841}/* Color !important */[data-text-color="secondary"]{color: #916841!important;}/* Border */.secondary.is-outline:hover{border-color:#916841}.success.is-underline:hover,.success.is-outline:hover,.success{background-color: #000000}.success-color, .success.is-link, .success.is-outline{color: #000000;}.success-border{border-color: #000000!important;}/* Color !important */[data-text-color="success"]{color: #000000!important;}/* Background Color */[data-text-bg="success"]{background-color: #000000;}body{font-size: 100%;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Quicksand", sans-serif}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family:"Quicksand", sans-serif;}.nav > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Quicksand", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 0;}h1,h2,h3,h4,h5,h6,.heading-font{color: #000000;}.alt-font{font-family: "Quicksand", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #000000;}a{color: #000000;}a:hover{color: #916841;}.tagcloud a:hover{border-color: #916841;background-color: #916841;}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.footer-1{background-color: #eeeeee}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style><style id="infinite-scroll-css" type="text/css">.page-load-status,.archive .woocommerce-pagination {display: none;}</style>	<meta property="fb:app_id" content="104537736801666" />
<meta property="fb:admins" content="100001613853961"/>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "././././connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=104537736801666";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body class="page-template-default page page-id-13 mmm mega_main_menu-2-1-7 theme-flatsome woocommerce-account woocommerce-page woocommerce-no-js lightbox nav-dropdown-has-arrow">

<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

<div id="wrapper">


<header id="header" class="header has-sticky sticky-jump">
   <div class="header-wrapper">
	<div id="masthead" class="header-main show-logo-center hide-for-sticky">
      <div class="header-inner flex-row container logo-center medium-logo-center" role="navigation">

          <!-- Logo -->
          <div id="logo" class="flex-col logo">
            <!-- Header logo -->
<a href="././index.html" title="Trang web mới - Một trang web mới sử dụng WordPress" rel="home">
    <img width="142" height="100" src="././wp-content/uploads/2019/12/logo-1.png" class="header_logo header-logo" alt="Trang web mới"/><img  width="142" height="100" src="././wp-content/uploads/2019/12/logo-1.png" class="header-logo-dark" alt="Trang web mới"/></a>
          </div>

          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
            <ul class="mobile-nav nav nav-left ">
              <li class="nav-icon has-icon">
  		<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
		
		  <i class="icon-menu" ></i>
		  		</a>
	</li>            </ul>
          </div>

          <!-- Left Elements -->
          <div class="flex-col hide-for-medium flex-left
            ">
            <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge" >
              <li class="html custom html_topbar_left"><strong class="uppercase">HOTLINE ĐẶT HANG: 0123 456 789</strong></li>            </ul>
          </div>

          <!-- Right Elements -->
          <div class="flex-col hide-for-medium flex-right">
            <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge">
              <li class="account-item has-icon
   active  "
>

  
</a><!-- .account-login-link -->



</li>
<li class="cart-item has-icon has-dropdown">

<a href="././gio-hang/index.html" title="Giỏ hàng" class="header-cart-link is-small">


<span class="header-cart-title">
   Giỏ hàng     </span>

    <i class="icon-shopping-cart"
    data-icon-label="0">
  </i>
  </a>

 <ul class="nav-dropdown nav-dropdown-default">
    <li class="html widget_shopping_cart">
      <div class="widget_shopping_cart_content">
        

	<p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>


      </div>
    </li>
     </ul><!-- .nav-dropdown -->

</li>
            </ul>
          </div>

          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
            <ul class="mobile-nav nav nav-right ">
              <li class="cart-item has-icon">

      <a href="././gio-hang/index.html" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
  
    <i class="icon-shopping-cart"
    data-icon-label="0">
  </i>
  </a>


  <!-- Cart Sidebar Popup -->
  <div id="cart-popup" class="mfp-hide widget_shopping_cart">
  <div class="cart-popup-inner inner-padding">
      <div class="cart-popup-title text-center">
          <h4 class="uppercase">Giỏ hàng</h4>
          <div class="is-divider"></div>
      </div>
      <div class="widget_shopping_cart_content">
          

	<p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>


      </div>
             <div class="cart-sidebar-content relative"></div>  </div>
  </div>

</li>
            </ul>
          </div>

      </div><!-- .header-inner -->
     
      </div><!-- .header-main --><div id="wide-nav" class="header-bottom wide-nav flex-has-center hide-for-medium">
    <div class="flex-row container">

            
                        <div class="flex-col hide-for-medium flex-center">
                <ul class="nav header-nav header-bottom-nav nav-center  nav-size-medium nav-spacing-medium">
                    
<!-- begin "mega_main_menu" -->
<div id="primary" class="mega_main_menu primary primary_style-flat icons-left first-lvl-align-left first-lvl-separator-smooth direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-enable dropdowns_trigger-hover dropdowns_animation-none no-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-1-7 mega_main">
	<div class="menu_holder">
	<div class="mmm_fullwidth_container"></div><!-- class="fullwidth_container" -->
		<div class="menu_inner" role="navigation">
			<span class="nav_logo">
				<a class="logo_link" href="././index.html" title="Trang web mới">
					<img src="././wp-content/plugins/mega_main_menu/framework/src/img/megamain-logo-120x120.png" alt="Trang web mới" />
				</a>
				<span class="mobile_toggle" data-target="#main_ul-primary" aria-expanded="false" aria-controls="main_ul-primary">
					<span class="mobile_button">
						Menu &nbsp;
						<span class="symbol_menu">&equiv;</span>
						<span class="symbol_cross">&#x2573;</span>
					</span><!-- class="mobile_button" -->
				</span><!-- /class="mobile_toggle" -->
			</span><!-- /class="nav_logo" -->
				<ul id="main_ul-primary" class="mega_main_menu_ul" role="menubar" aria-label="Menu">
<li id="menu-item-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-387 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Trang chủ
			</span>
		</span>
	</a>
</li>
<li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././gioi-thieu/index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Giới thiệu
			</span>
		</span>
	</a>
</li>
<li id="menu-item-389" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././dong-ho-nam/index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Đồng hồ nam
			</span>
		</span>
	</a>
</li>
<li id="menu-item-390" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././dong-ho-nu/index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Đồng hồ nữ
			</span>
		</span>
	</a>
</li>
<li id="menu-item-391" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-391 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././phu-kien/index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Phụ kiện
			</span>
		</span>
	</a>
</li>
<li id="menu-item-388" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-388 default_dropdown default_style drop_to_right submenu_default_width columns1">
	<a href="././category/tin-tuc/index.html" class="item_link  disable_icon" role="menuitem" tabindex="0">
		<i class=""></i> 
		<span class="link_content">
			<span class="link_text">
				Tin tức
			</span>
		</span>
	</a>
</li></ul>
		</div><!-- /class="menu_inner" -->
	</div><!-- /class="menu_holder" -->
</div><!-- /id="mega_main_menu" -->                </ul>
            </div><!-- flex-col -->
            
            
            
    </div><!-- .flex-row -->
</div><!-- .header-bottom -->

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

<footer id="footer" class="footer-wrapper">

		<section class="section section-footer" id="section_1275752504">
		<div class="bg section-bg fill bg-fill  bg-loaded" >

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			

<div class="row"  id="row-970371674">

<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<div class="logo-footer"><img class="alignnone size-full wp-image-293" src="././wp-content/uploads/2019/12/logo-1.png" alt="" width="300" height="150" /></div>
<ul class="list-menu">
<li><i class="fa fa-map-marker" aria-hidden="true"></i> 30 Đường 2/9, Phường Bình Hiên, Quận Hải Châu, Đà Nẵng</li>
<li><i class="fa fa-phone" aria-hidden="true"></i> <a title="0123456789" href="tel:0123456789">0123 456 789</a></li>
<li><i class="fa fa-envelope" aria-hidden="true"></i> <a title="evoteamthemes@gmail.com" href="mailto:evoteamthemes@gmail.com">evoteamthemes@gmail.com</a></li>
</ul>

</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">DANH MỤC SẢN PHẨM</h3>
<ul class="sidebar-wrapper ul-reset"><div id="nav_menu-6" class="col pb-0 widget widget_nav_menu"><div class="menu-danh-muc-san-pham-container"><ul id="menu-danh-muc-san-pham" class="menu"><li id="menu-item-424" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-424"><a href="././dong-ho-nam/index.html">Đồng hồ nam</a></li>
<li id="menu-item-425" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-425"><a href="././dong-ho-nu/index.html">Đồng hồ nữ</a></li>
<li id="menu-item-426" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-426"><a href="././kinh-ram/index.html">Kính râm</a></li>
<li id="menu-item-427" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-427"><a href="././phu-kien/index.html">Phụ kiện</a></li>
<li id="menu-item-428" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-428"><a href="././vong-tay/index.html">Vòng tay</a></li>
</ul></div></div></ul>


</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">LIÊN KẾT</h3>
<ul class="sidebar-wrapper ul-reset"><div id="nav_menu-7" class="col pb-0 widget widget_nav_menu"><div class="menu-menu-trang-chu-container"><ul id="menu-menu-trang-chu" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-387"><a href="././index.html">Trang chủ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="././gioi-thieu/index.html">Giới thiệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389"><a href="././dong-ho-nam/index.html">Đồng hồ nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390"><a href="././dong-ho-nu/index.html">Đồng hồ nữ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-391"><a href="././phu-kien/index.html">Phụ kiện</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-388"><a href="././category/tin-tuc/index.html">Tin tức</a></li>
</ul></div></div></ul>


</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">ĐĂNG KÝ NHẬN TIN</h3>
<p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
<div role="form" class="wpcf7" id="wpcf7-f430-o1" lang="vi" dir="ltr">
<div class="screen-reader-response"></div>
<form action="https://dongho.giaodienwebmau.com/tai-khoan/#wpcf7-f430-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="430" />
<input type="hidden" name="_wpcf7_version" value="5.1.1" />
<input type="hidden" name="_wpcf7_locale" value="vi" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f430-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="g-recaptcha-response" value="" />
</div>
<p><label><br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email của bạn" /></span> </label></p>
<p><input type="submit" value="Đăng ký" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1397523421">
								<div class="img-inner dark" >
			<img width="268" height="45" src="././wp-content/uploads/2019/12/visa.jpg" class="attachment-large size-large" alt="" />						
					</div>
								
<style scope="scope">

#image_1397523421 {
  width: 100%;
}
</style>
	</div>
	


</div></div>

</div>

		</div><!-- .section-content -->

		
<style scope="scope">

#section_1275752504 {
  padding-top: 30px;
  padding-bottom: 30px;
  background-color: rgb(233, 233, 233);
}
</style>
	</section>
	
<div class="absolute-footer dark medium-text-center small-text-center">
  <div class="container clearfix">

    
    <div class="footer-primary pull-left">
            <div class="copyright-footer">
        Copyright 2024 &copy; <strong>UX Themes</strong>      </div>
          </div><!-- .left -->
  </div><!-- .container -->
</div><!-- .absolute-footer -->
<a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up" ></i></a>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
              <li class="header-search-form search-form html relative has-icon">
	<div class="header-search-form-wrapper">
		<div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://dongho.giaodienwebmau.com/">
	<div class="flex-row relative">
						<div class="flex-col flex-grow">
			<label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
			<input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
			<input type="hidden" name="post_type" value="product" />
					</div><!-- .flex-col -->
		<div class="flex-col">
			<button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
				<i class="icon-search" ></i>			</button>
		</div><!-- .flex-col -->
	</div><!-- .flex-row -->
	<div class="live-search-results text-left z-top"></div>
</form>
</div>	</div>
</li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-387"><a href="././index.html" class="nav-top-link">Trang chủ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="././gioi-thieu/index.html" class="nav-top-link">Giới thiệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389"><a href="././dong-ho-nam/index.html" class="nav-top-link">Đồng hồ nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390"><a href="././dong-ho-nu/index.html" class="nav-top-link">Đồng hồ nữ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-391"><a href="././phu-kien/index.html" class="nav-top-link">Phụ kiện</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-388"><a href="././category/tin-tuc/index.html" class="nav-top-link">Tin tức</a></li>
<li class="account-item has-icon menu-item">
<a href="index.html"
    class="nav-top-link nav-top-not-logged-in">
    <span class="header-account-title">
    Đăng nhập  </span>
</a><!-- .account-login-link -->

</li>
        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='././././use.fontawesome.com/2deb5ba708578a.js?ver=4.9.24'></script>
<script type='text/javascript' src='././wp-content/plugins/cf7-icons-and-labels/js/cf7_script578a.js?ver=4.9.24'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/dongho.giaodienwebmau.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1'></script>
<script type='text/javascript' src='././wp-content/plugins/devvn-quick-buy/js/jquery.validate.min4c71.js?ver=2.1.3'></script>
<script type='text/javascript' src='././wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-includes/js/wp-util.min578a.js?ver=4.9.24'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var devvn_quickbuy_array = {"ajaxurl":"https:\/\/dongho.giaodienwebmau.com\/wp-admin\/admin-ajax.php","siteurl":"https:\/\/dongho.giaodienwebmau.com","popup_error":"\u0110\u1eb7t h\u00e0ng th\u1ea5t b\u1ea1i. Vui l\u00f2ng \u0111\u1eb7t h\u00e0ng l\u1ea1i. Xin c\u1ea3m \u01a1n!","out_of_stock_mess":"H\u1ebft h\u00e0ng!","price_decimal":".","num_decimals":"0","price_thousand":",","currency_format":"\u20ab","qty_text":"S\u1ed1 l\u01b0\u1ee3ng","name_text":"H\u1ecd v\u00e0 t\u00ean l\u00e0 b\u1eaft bu\u1ed9c","phone_text":"S\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c","valid_phone_text":"Nh\u1eadp l\u1ea1i s\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c","valid_phone_text_equalto":"Vui l\u00f2ng nh\u1eadp l\u1ea1i c\u00f9ng s\u1ed1 \u0111i\u1ec7n tho\u1ea1i","email_text":"Email l\u00e0 b\u1eaft bu\u1ed9c","quan_text":"Qu\u1eadn huy\u1ec7n l\u00e0 b\u1eaft bu\u1ed9c","xa_text":"X\u00e3\/Ph\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c","address_text":"S\u1ed1 nh\u00e0, t\u00ean \u0111\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/devvn-quick-buy/js/devvn-quick-buy4c71.js?ver=2.1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/dongho.giaodienwebmau.com\/gio-hang\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min0ba6.js?ver=1.0.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-admin/js/password-strength-meter.min578a.js?ver=4.9.24'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_bbd060294f6a20f87f5690314eef6995","fragment_name":"wc_fragments_bbd060294f6a20f87f5690314eef6995","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-content/plugins/mega_main_menu/src/js/frontende7f3.js?ver=2.1.7'></script>
<script type='text/javascript' src='././wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flatsomeVars = {"ajaxurl":"https:\/\/dongho.giaodienwebmau.com\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/js/flatsome12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/libs/infinite-scroll.pkgd.min459e.js?ver=3.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flatsome_infinite_scroll = {"scroll_threshold":"400","fade_in_duration":"300","type":"spinner","list_style":"grid","history":"push"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/themes/flatsome/inc/extensions/flatsome-infinite-scroll/flatsome-infinite-scroll7ef2.js?ver=1.5'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/js/woocommerce12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-includes/js/wp-embed.min578a.js?ver=4.9.24'></script>

</body>

<!-- Mirrored from dongho.giaodienwebmau.com/tai-khoan/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 14:04:40 GMT -->
</html>




