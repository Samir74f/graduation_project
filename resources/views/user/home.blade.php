@include('user.css')

<body>
    <div class="page-wrapper">


        <main class="main">
           <div class="intro-slider-container mb-5">@foreach ($slide as  $slider)
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                    data-owl-options='{
                        "dots": true,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>







                            <div class="intro-slide" style="background-image: url({{asset('/catagoryimage/'.$slider->image)}});">

                                <div class="container intro-content">
                                    <div class="row justify-content-end">
                                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                            <h3 class="intro-subtitle text-third">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">{{ $slider->title }}</h1>
                                            <h1 class="intro-title">{{ $slider->description }}</h1><!-- End .intro-title -->

                                        </div><!-- End .col-lg-11 offset-lg-1 -->
                                    </div><!-- End .row -->
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->



                </div><!-- End .intro-slider owl-carousel owl-simple -->

@endforeach



            </div><!-- End .intro-slider-container -->


{{--
                        <div class="intro-slider-container">
                <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                    @foreach ($slide as $key => $slider)
                                        @if($slider->image)

                    <div class="intro-slide" style="background-image: url({{asset("$slider->image")}});">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Bedroom Furniture</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Find Comfort <br>That Suits You.</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                    @endif
                                    @endforeach
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container --> --}}

            {{--

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $key => $slider)
                <div class="carousel-item {{$key ==0 ? 'active' :''}}" >
                    @if($slider->image)
                <img src="{{asset("$slider->image")}}" class="d-block w-100" alt="...">
                @endif
                </div>
                @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div> --}}
            <div class="mb-4"></div><!-- End .mb-4 -->







            @forelse ($categories as $categorie)
                <div class="container">
                    <h2 class="title text-center mb-4">Explore Some Categories</h2><!-- End .title text-center -->

                    <div class="cat-blocks-container">
                        <div class="row">


                            @foreach($categories as $categorie)
                                    <div class="col-6 col-sm-4 col-lg-2">
                                                                <a href="{{url('Products/'.$categorie->slug)}}" class="cat-block">
                                                                    <figure>
                                                                        <span>
                                                                            <img src="{{asset('/catagoryimage/'.$categorie->image)}}" alt="Category image" width="150px">
                                                                        </span>
                                                                    </figure>

                                                                    <h3 class="cat-block-title">{{ $categorie->name }}</h3><!-- End .cat-block-title -->
                                                                </a>
                                    </div><!-- End .col-sm-4 col-lg-2 -->
                            @endforeach

                        </div><!-- End .row -->
                    </div><!-- End .cat-blocks-container -->
                </div><!-- End .container -->
            @empty

            @endforelse


            <div class="mb-4"></div><!-- End .mb-4 -->







                <div class="container for-you">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Lastest Products </h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                    <div class="heading-right">
                            <a href="{{url('AllProducts')}}" class="title-link">View All Products <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="products">


                        <div class="row justify-content-center">
                             @forelse ($prod as $pro)

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <a href="">
                                            <img src="{{asset('/catagoryimage/'.$pro->image)}}" href="{{url('view_product/'.$pro->slug)}}"  alt="Product image" class="product-image">
                                        </a>
                                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                                        {{csrf_field()}}
                                        <input name="user_id" type="text" value="{{Auth::user()->id}}"  hidden/>
                                        <input name="product_id" type="text" value="{{$pro->id}}" hidden/>
                                        <div class="product-action-vertical">
                                            <button  class="btn-product-icon btn-wishlist" title="Add to wishlist" type="submit"></button>
                                        </div><!-- End .product-action -->
                                        </form>

                                        <div class="product-action">
                                    <form action="{{url('/addcart/'.$pro->id)}}" id="contact_form" method="post">
                                        {{csrf_field()}}

                                        <input name="quantity" type="number" value="1" class="form-control" style="width: 220px" hidden/>

                                            <button type="submit" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></button>
                                        </div><!-- End .product-action -->

                                    </form>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="{{url('Products/'.$pro->Category->slug)}}">{{ $pro->Category->name}}</a>
                                            <a href="{{url('brands/'.$pro->brand->slug)}}">{{ $pro->brand->name }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{url('view_product/'.$pro->slug)}}">{{ $pro->name }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                        @if (is_null( $pro->discount_price))
                                            <span class="old-price"> ${{ $pro->price }}</span>
                                        @else
                                                                                <span class="new-price">${{ $pro->discount_price }}</span>
                                                                                <span class="old-price">Was ${{ $pro->price }}</span>
                                        @endif


                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                             @empty

                            @endforelse

                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- End .container -->



            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <hr class="mb-0">
            </div><!-- End .container -->




    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>



</body>
@include('user.scripts')
