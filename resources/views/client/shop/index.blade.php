<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('client.layouts.includes.head')
    @stack('css')
    <title>
        @stack('title', 'Pustok - Bookstore')
    </title>
</head>

<body>
	<div class="site-wrapper" id="top">
		   <div class="site-header header-4 mb--20 d-none d-lg-block">
         
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="index.html" class="site-brand">
                                <img src="{{asset('client/assets/image/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
                                <input type="text" placeholder="Search entire store here">
                                <button>Search</button>
                            </div>
                        </div>
                        <d  iv class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                        <a href="login-register.html" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="login-register.html">Register</a>
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number">
                                                1
                                            </span>
                                            <span class="text-item">
                                                Shopping Cart
                                            </span>
                                            <span class="price">
                                                £0.00
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.html" class="image">
                                                        <img src="{{asset('client/assets/image/products/cart-product-1.jpg')}}" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                                Astro Zoom AZ421 16 MP</a>
                                                        </h3>
                                                        <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                                        <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="cart.html" class="btn">View Cart <i
                                                            class="fas fa-chevron-right"></i></a>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </d>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav  primary-nav ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Accessories</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+01-202-555-0181</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right li-last-0">
                                    <li class="menu-item has-children">
                                        <a href="index.html">Home </a>
                                       
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="./shop-list.html">shop</a>
                                       
                                    </li>
                                 
                                  
                                    <li class="menu-item">
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.html" class="site-brand">
                                <img src="{{asset('client/assets/image/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <li class="cat-item has-children">
                                            <a href="#">Arts & Photography</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bags & Cases</a></li>
                                                <li><a href="#">Binoculars & Scopes</a></li>
                                                <li><a href="#">Digital Cameras</a></li>
                                                <li><a href="#">Film Photography</a></li>
                                                <li><a href="#">Lighting & Studio</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                            <ul class="sub-menu">
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-block">
                                                    <h3 class="title">WHEEL SIMULATORS</h3>
                                                    <ul>
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Business & Money</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Calendars</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Children's Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item has-children"><a href="#">Comics</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                        <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Brake Tools</a></li>
                                                <li><a href="">Driveshafts</a></li>
                                                <li><a href="">Emergency Brake</a></li>
                                                <li><a href="">Spools</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item "><a href="#">Accessories</a></li>
                                        <li class="cat-item "><a href="#">Education</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                        <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                  
                                </li>
                               
                                <li class="menu-item-has-children">
                                    <a href="./shop-list.html">Shop</a>
                                </li>
                             
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu menu-block-2">
                            <li class="menu-item-has-children">
                                <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="cart.html">USD $</a></li>
                                    <li> <a href="checkout.html">EUR €</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li>Eng</li>
                                    <li>Ban</li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="">My Account</a></li>
                                    <li><a href="">Order History</a></li>
                                    <li><a href="">Transactions</a></li>
                                    <li><a href="">Downloads</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.html" class="site-brand">
                            <img src="{{asset('client/assets/image/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item has-children">
                                    <a href="index.html">Home </a>
                                  
                                </li>
                                <!-- Shop -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="./shop-list.html">shop </a>
                                    
                                </li>
                            
                                
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Shop</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="shop-toolbar mb--30">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid-four">
									<span class="grid-four-icon active">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								
							</div>
						</div>
					
					
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0">
									<option value="" selected="selected">Default Sorting</option>
									<option value="">Sort
										By:Name (A - Z)</option>
									<option value="">Sort
										By:Name (Z - A)</option>
									<option value="">Sort
										By:Price (Low &gt; High)</option>
									<option value="">Sort
										By:Price (High &gt; Low)</option>
									<option value="">Sort
										By:Rating (Highest)</option>
									<option value="">Sort
										By:Rating (Lowest)</option>
									<option value="">Sort
										By:Model (A - Z)</option>
									<option value="">Sort
										By:Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-toolbar d-none">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon active">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
					
						
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0">
									<option value="" selected="selected">Default Sorting</option>
									<option value="">Sort
										By:Name (A - Z)</option>
									<option value="">Sort
										By:Name (Z - A)</option>
									<option value="">Sort
										By:Price (Low &gt; High)</option>
									<option value="">Sort
										By:Price (High &gt; Low)</option>
									<option value="">Sort
										By:Rating (Highest)</option>
									<option value="">Sort
										By:Rating (Lowest)</option>
									<option value="">Sort
										By:Model (A - Z)</option>
									<option value="">Sort
										By:Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-product-wrap with-pagination row space-db--30 shop-border grid-four">
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							<div class="product-grid-content">
								<div class="product-header">
									<a href="" class="author">
										Epple
									</a>
									<h3><a href="product-details.html">Here Is A Quick Cure For Book</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="{{asset('client/assets/image/products/product-2.jpg')}}" alt="">
										<div class="hover-contents">
											<a href="product-details.html" class="hover-image">
												<img src="{{asset('client/assets/image/products/product-1.jpg')}}" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.html" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.html" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.html" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-toggle="modal" data-target="#quickModal"
													class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">£51.20</span>
										<del class="price-old">£51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
							<div class="product-list-content">
								<div class="card-image">
									<img src="{{asset('client/assets/image/products/product-3.jpg')}}" alt="">
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<a href="" class="author">
											Gpple
										</a>
										<h3><a href="product-details.html" tabindex="0">Qpple cPad with Retina Display
												MD510LL/A</a></h3>
									</div>
									<article>
										<h2 class="sr-only">Card List Article</h2>
										<p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
											battery life, the new iPod classic
											lets you enjoy
											up to 40,000 songs or..</p>
									</article>
									<div class="price-block">
										<span class="price">£51.20</span>
										<del class="price-old">£51.20</del>
										<span class="price-discount">20%</span>
									</div>
									<div class="rating-block">
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star "></span>
									</div>
									<div class="btn-block">
										<a href="" class="btn btn-outlined">Add To Cart</a>
										<a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
										<a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Pagination Block -->
				<div class="row pt--30">
					<div class="col-md-12">
						<div class="pagination-block">
							<ul class="pagination-btns flex-center">
								<li><a href="" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a>
								</li>
								<li><a href="" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
								</li>
								<li class="active"><a href="" class="single-btn">1</a></li>
								<li><a href="" class="single-btn">2</a></li>
								<li><a href="" class="single-btn">3</a></li>
								<li><a href="" class="single-btn">4</a></li>
								<li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
								</li>
								<li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
					aria-labelledby="quickModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="product-details-modal">
								<div class="row">
									<div class="col-lg-5">
										<!-- Product Details Slider Big Image-->
										<div class="product-details-slider sb-slick-slider arrow-type-two"
											data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-1.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-2.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-3.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-4.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-5.jpg')}}" alt="">
											</div>
										</div>
										<!-- Product Details Slider Nav -->
										<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
											data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-1.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-2.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-3.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-4.jpg')}}" alt="">
											</div>
											<div class="single-slide">
												<img src="{{asset('client/assets/image/products/product-details-5.jpg')}}" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-7 mt--30 mt-lg--30">
										<div class="product-details-info pl-lg--30 ">
											<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
											<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
											<ul class="list-unstyled">
												<li>Ex Tax: <span class="list-value"> £60.24</span></li>
												<li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a>
												</li>
												<li>Product Code: <span class="list-value"> model1</span></li>
												<li>Reward Points: <span class="list-value"> 200</span></li>
												<li>Availability: <span class="list-value"> In Stock</span></li>
											</ul>
											<div class="price-block">
												<span class="price-new">£73.79</span>
												<del class="price-old">£91.86</del>
											</div>
											<div class="rating-widget">
												<div class="rating-block">
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star star_on"></span>
													<span class="fas fa-star "></span>
												</div>
												<div class="review-widget">
													<a href="">(1 Reviews)</a> <span>|</span>
													<a href="">Write a review</a>
												</div>
											</div>
											<article class="product-details-article">
												<h4 class="sr-only">Product Summery</h4>
												<p>Long printed dress with thin adjustable straps. V-neckline and wiring
													under the Dust with ruffles at the bottom
													of the
													dress.</p>
											</article>
											<div class="add-to-cart-row">
												<div class="count-input-block">
													<span class="widget-label">Qty</span>
													<input type="number" class="form-control text-center" value="1">
												</div>
												<div class="add-cart-btn">
													<a href="" class="btn btn-outlined--primary"><span
															class="plus-icon">+</span>Add to Cart</a>
												</div>
											</div>
											<div class="compare-wishlist-row">
												<a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish
													List</a>
												<a href="" class="add-link"><i class="fas fa-random"></i>Add to
													Compare</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="widget-social-share">
									<span class="widget-label">Share:</span>
									<div class="modal-social-share">
										<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
										<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<x-client-footer-component />
    @include('client.layouts.includes.foot')
    @stack("js")
</body>

</html>