@include('user.css')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Navbar Design</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
@include('sweetalert::alert')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Products</h4>
                </div>

{{--             @forelse ($products as $item)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if ($item->quantity> 0 )
                                <label class="stock bg-success">In Stock</label>
                            @else
                                <label class="stock bg-danger">Out of Stock</label>

                            @endif


                            <img src="{{asset('/catagoryimage/'.$item->image)}}" alt="Laptop">
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">HP</p>
                            <h5 class="product-name">
                               <a href="{{url('view_product/'.$item->slug)}}">
                                    {{ $item->name }}
                               </a>
                            </h5>
                            <div>
                                                                    @if (is_null( $item->discount_price))
                                        <span class="original-price"> ${{ $item->price }}</span>
                                    @else
                                                                            <span class="selling-price">${{ $item->discount_price }}</span>
                                                                            <span class="original-price">${{ $item->price }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                @empty


            @endforelse --}}

                    <div class="row justify-content-center">
                       {{--  @foreach( $products as $pro)
                        <div class="col-6 col-md-5 col-lg-2">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{url('view_product/'.$pro->slug)}}">
                                        <img src="{{asset('/catagoryimage/'.$pro->image)}}" href="{{url('view_product/'.$pro->slug)}}"  alt="Product image" class="product-image">
                                    </a>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a @disabled(true)>{{ $pro->Category->name}}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{url('view_product/'.$pro->slug)}}">{{ $pro->name }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    @if (is_null( $pro->discount_price))
                                        <span class="old-price"> ${{ $pro->price }}</span>
                                    @else
                                                                            <span class="new-price">${{ $pro->discount_price }}</span>
                                                                            <span class="old-price">Was ${{ $pro->price }}</span>
                                    @endif
                                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                                        {{csrf_field()}}
                                        <input name="user_id" type="text" value="{{Auth::user()->id}}"  hidden/>
                                        <input name="product_id" type="text" value="{{$pro->id}}" hidden/>
                                        <div class="product-action-vertical">
                                            <button href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist" type="submit"></button>
                                        </div><!-- End .product-action -->
                                        </form>

                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        @endforeach --}}



                <div class="container for-you">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Lastest Products </h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                    <div class="heading-right">
                            <a href="" class="title-link">View All Products <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="products">


                        <div class="row justify-content-center">
                           @forelse ($products as $pro)

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
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
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


                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- End .container -->
            @empty

            @endforelse


                    </div><!-- End .row -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
