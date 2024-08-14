<!-- .header-bottom -->

<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div><!-- .header-bg-container -->   </div><!-- header-wrapper-->
</header>

<div class="custom-page-title"><img src="../wp-content/uploads/2019/03/9.html"></div><div class="shop-page-title category-page-title page-title ">

	<div class="page-title-inner flex-row  medium-flex-wrap container">
	  <div class="flex-col flex-grow medium-text-center">
	  	 	 <div class="is-large">
	<nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="../index.html">Trang chủ</a> <span class="divider">&#47;</span> Cửa hàng</nav></div>
	  </div><!-- .flex-left -->
	  
	   <div class="flex-col medium-text-center">
	  	 	
<p class="woocommerce-result-count hide-for-medium">
	Showing all 10 results</p>

  
    <div class="row div-product-cat large-columns-2 medium-columns- small-columns- row-xsmall">
  </div><form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
					<option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
					<option value="popularity" >Thứ tự theo mức độ phổ biến</option>
					<option value="rating" >Thứ tự theo điểm đánh giá</option>
					<option value="date" >Mới nhất</option>
					<option value="price" >Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>
	   </div><!-- .flex-right -->
	   
	</div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
<div class="row category-page-row">

		<div class="col large-12">
		<div class="shop-container">
		
		<div class="woocommerce-notices-wrapper"></div><div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">
        <?php
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;}
                    echo '
<div class="product-small col has-hover product type-product post-298 status-publish first instock product_cat-dong-ho-nam has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-fade_in_back">
				<a href="' . $linksp . '">
					<img width="300" height="300" src="' . $hinh . '" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""  sizes="(max-width: 300px) 100vw, 300px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
							</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products text-center grid-style-2">
			<div class="title-wrapper"><p class="name product-title"><a href="' . $linksp . '">' . $namesp . '</a></p></div><div class="price-wrapper">
	<span class="price"><span class="woocommerce-Price-amount amount">' . $price . '&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
</div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div>'
?>
<!-- col -->

<!-- col -->
</div><!-- row --><div class="page-load-status">
	<div class="loader-spinner infinite-scroll-request text-center">
			<div class="loading-spin"></div>
	</div>
</div>

		</div><!-- shop container -->
		</div><!-- .large-12  -->
</div><!-- .row -->

</main><!-- #main -->
