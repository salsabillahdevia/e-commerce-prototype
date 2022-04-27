<?php  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>user_assets/img/favmatenrou.png">
		<title>Halaman <?php echo $data['judul']; ?></title>

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/tambahan.css">

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>user_assets/css/style.css"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62 8777-2571-215</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> akasuna16@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Shinjuku Division, Matenrou</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-money"></i> Rp. </a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> Akun Saya </a></li>
						<li><a href="<?= BASEURL; ?>user/logout"><i class="fa fa-power-off"></i> Logout </a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?= BASEURL; ?>user" class="logo">
									<img src="<?= BASEURL; ?>user_assets/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Aksesoris</option>
										<option value="2">Elektronik</option>
										<option value="3">Fashion</option>
										<option value="4">Kosmetik</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Keranjang</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">

											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo BASEURL; ?>user_assets/img/produk/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Alcatroz Xplorer 7770LFX Keyboard Backlight</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>Rp. 120.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo BASEURL; ?>user_assets/img/produk/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Gamis Wolfis Peach</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>Rp. 500.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>

										<div class="cart-summary">
											<small>3 item terpilih</small>
											<h5>SUBTOTAL: Rp. 620.000</h5>
										</div>
										<div class="cart-btns">
											<a href="<?= BASEURL; ?>user/keranjang">Lihat Keranjang </a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		