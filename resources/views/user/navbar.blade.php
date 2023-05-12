{{-- <!DOCTYPE html>
<html lang="en">
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


        <header class="header header-intro-clearance header-4">
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{url('Home')}}" class="logo">
                            <img src="{{URL::asset('images/2.jpg')}}" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="{{url('search')}}" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->



                    </div>

                    <div class="header-right">

                                     @if (Route::has('login'))

                                        @auth
                                                <div class="wishlist">
                                                    <a href="wishlist.html" title="Wishlist">
                                                        <div class="icon">
                                                            <i class="icon-heart-o"></i>
                                                            <span class="wishlist-count badge"></span>
                                                        </div>
                                                        <p>Wishlist</p>
                                                    </a>
                                                </div><!-- End .compare-dropdown -->

                                                <div class="dropdown cart-dropdown">
                                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                        <div class="icon">
                                                            <i class="icon-shopping-cart"></i>
                                                            <span class="cart-count"></span>
                                                        </div>
                                                        <p>Cart</p>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-cart-products">
                                                            <div class="product">
                                                                <div class="product-cart-details">
                                                                    <h4 class="product-title">
                                                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                                                    </h4>

                                                                    <span class="cart-product-info">
                                                                        <span class="cart-product-qty">1</span>
                                                                        x $84.00
                                                                    </span>
                                                                </div><!-- End .product-cart-details -->

                                                                <figure class="product-image-container">
                                                                    <a href="product.html" class="product-image">
                                                                        <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                                    </a>
                                                                </figure>
                                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                            </div><!-- End .product -->

                                                        </div><!-- End .cart-product -->

                                                        <div class="dropdown-cart-total">
                                                            <span>Total</span>

                                                            <span class="cart-total-price">$160.00</span>
                                                        </div><!-- End .dropdown-cart-total -->

                                                        <div class="dropdown-cart-action">
                                                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                                                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                                        </div><!-- End .dropdown-cart-total -->
                                                    </div><!-- End .dropdown-menu -->
                                                </div><!-- End .cart-dropdown -->
                                                <x-app-layout>
                                                </x-app-layout>


                                                @else
                                                    <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                    @endif
                                                @endauth

                                     @endif

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">


                                        <li class="item-lead"><a href="#">Daily offers</a></li>
                                        <li class="item-lead"><a href="#">Gift Ideas</a></li>
                                        <li class="item-lead"><a href="{{url('Categories')}}">All Gategory</a></li>
                                        @foreach($categories as $categorie)

                                            <li><a href="{{url('view-cat/'.$categorie->id)}}">{{ $categorie->name }}</a></li>

                                        @endforeach
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="index-1.html">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                        <span class="demo-title">01 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->


                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Shop</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Shop List</a></li>
                                                                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                                <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product.html">Default</a></li>
                                                        <li><a href="product-centered.html">Centered</a></li>
                                                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="about.html">About 01</a></li>
                                                <li><a href="about-2.html">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="contact.html">Contact 01</a></li>
                                                <li><a href="contact-2.html">Contact 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">Blog</a>

                                    <ul>
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>
                                                <li><a href="single.html">Default with sidebar</a></li>
                                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                    <ul>
                                        <li><a href="elements-products.html">Products</a></li>
                                        <li><a href="elements-typography.html">Typography</a></li>
                                        <li><a href="elements-titles.html">Titles</a></li>
                                        <li><a href="elements-banners.html">Banners</a></li>
                                        <li><a href="elements-product-category.html">Product Category</a></li>
                                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                                        <li><a href="elements-buttons.html">Buttons</a></li>
                                        <li><a href="elements-accordions.html">Accordions</a></li>
                                        <li><a href="elements-tabs.html">Tabs</a></li>
                                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                                        <li><a href="elements-cta.html">Call to Action</a></li>
                                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>Contact with us<p><span class="highlight">&nbsp;</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->







 --}}

  <div class="page-wrapper">
        <header class="header header-8">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                         <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                   <li><a href="{{url('aboutus')}}">About Us</a></li>
                                    <li><a href="{{url('contactus')}}">Contact Us</a></li>

                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->


                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    @if (Auth::user()->wishlist->count())
                                    <li><a href="{{url('wishlistpage')}}"><i class="icon-heart-o"></i>My Wishlist( {{Auth::user()->wishlist->count()}} )  </li>


                                    </br>
                                    @endif

                                     @if (Route::has('login'))
                                                @auth
                                                <li><a href="ss" data-toggle="modal"><i class="icon-user"></i>My Profile</a></li>



                                                @else
                                                    <li><a href="{{ route('login') }}" data-toggle="modal"><i class="icon-user"></i>Login</a></li>

                                                    @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}" data-toggle="modal"><i class="icon-user"></i>register</a></li>

                                                    @endif
                                        @endauth

                                     @endif

                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->
ب
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        @if($settings)
                        <a href="{{url('Home')}}" class="logo">
                            <img src=" {{asset('/catagoryimage/'.$settings->logo)}}" alt="Molla Logo" width="55" height="25">
                            
                        </a>
                        <div style="font-size: 25px">{{$settings->name}}</div>
                        @endif
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{url('')}}" >Home</a>


                                </li>
                                <li>
                                    <a href="{{url('Categories')}}" class="sf-with-ul">Category</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">

                                                        <div class="col-md-6">
                                                            <div class="menu-title">All Categories</div><!-- End .menu-title -->
                                                            <ul>

                                                                    @foreach($categories as $categorie)
                                                                        <li><a href="{{url('view-cat/'.$categorie->id)}}" style="font-size: 20px">{{ $categorie->name }}</a></li>
                                                                    @endforeach
                                                            </ul>
                                                            <a href="{{url('Categories')}}">View all </a>
                                                        </div><!-- End .col-md-6 -->

                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>


                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <div class="header-search">

                            <form action="{{url('search')}}" method="get">
                                <button type="submit" name="submit" class="search-toggle" role="button"><i class="icon-search"></i></button>
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <div class="cart-dropdown" >
                            <a href="{{url('showcart')}}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart" ></i>
                                <span class="cart-count">{{$count}}</span>
                            </a>
                        </div><!-- End .cart-dropdown -->
                                    @if (Route::has('login'))
                                            @auth
                                                                                           <x-app-layout>
                                                </x-app-layout>



                                    @endauth

                                     @endif
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
