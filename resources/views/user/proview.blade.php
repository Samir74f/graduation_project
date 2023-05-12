@include('user.css')








        <main class="main">
<hr class="mt-3 mb-5">
            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery">
                                    <figure class="product-main-image" >
                                        <span class="product-label label-sale">Sale</span>
                                        <img  id="product-zoom" src="{{asset('/catagoryimage/'.$product->image) }}" data-zoom-image="{{asset('/catagoryimage/'.$product->image) }}" alt="product image" style="width: 500px">
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery " class="product-image-gallery product-gallery-masonry ">
                                        <div class="row">
                                        @forelse ($product->productimage as $image)
                                            <a class="product-gallery-item" href="#" data-image="{{asset($image->image)}}" data-zoom-image="{{asset($image->image)}}">
                                                <img src="{{asset($image->image)}}" alt="product cross">
                                            </a>
                                        @empty

                                        @endforelse
</div>
                                    </div><!-- End .product-image-gallery -->





                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details sticky-content">
                                    <h1 class="product-title">Black denim dungaree dress</h1><!-- End .product-title -->

                                    <div class="product-price">


                                    @if (is_null( $product->discount_price))
                                        <span class="old-price"> ${{ $product->price }}</span>
                                    @else
                                        <span class="new-price">${{ $product->discount_price }}</span>
                                        <span class="old-price"> ${{ $product->price }}</span>
                                    @endif
                                    </div><!-- End .product-price -->


                                                                        <div class="details-filter-row details-row-size">


                            @if ($product->quantity> 0 )
                                <label class="stock bg-success">In Stock</label>
                            @else
                                <label class="stock bg-danger">Out of Stock</label>

                            @endif
                                    </div>
                                    <div class="product-content">
                                        <p>{{ $product->description }} </p>
                                    </div><!-- End .product-content -->







                                    <form action="{{url('/addcart/'.$product->id)}}" id="contact_form" method="post">
                                        {{csrf_field()}}
                                        <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" name="quantity"  min="1" max="{{$product->quantity}}" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->






                                    <div class="product-details-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
</form>
                                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                                            {{csrf_field()}}
                                            <input name="user_id" type="text" value="{{Auth::user()->id}}"  hidden/>
                                            <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                            <div class="details-action-wrapper">
                                                <button type="submit" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></button>
                                            </div><!-- End .details-action-wrapper -->
                                        </form>
                                    </div><!-- End .product-details-action -->






                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="{{url('Products/'.$product->category->slug)}}">{{ $product->category->name }}</a>,
                                            <a href="{{url('Products/'.$product->brand->slug)}}">{{ $product->brand->name }}</a>,
                                        </div><!-- End .product-cat -->

                                    </div><!-- End .product-details-footer -->



                                    <div class="product-content">
                                        <h3 class="">Description</h3>
                                        <p>{{ $product->long_description }}</p>
                                    </div><!-- End .product-content -->


                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <hr class="mt-3 mb-5">
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->



















{{-- <body>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Centered</li>
                    </ol>


                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom"  src=" {{asset('/catagoryimage/'.$product->image) }}"  data-zoom-image="{{asset('/catagoryimage/'.$product->image)}}" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                                @forelse ($product->productimage as $image)
                                                                                            <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/centered/1.jpg" data-zoom-image="assets/images/products/single/centered/1-big.jpg">
                                                <img src="{{asset($image->image)}}" alt="product side">
                                            </a>
                                                @empty

                                                @endforelse

                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details product-details-centered">
                                    <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->
                                    <div class="product-price">
                                    @if (is_null( $product->discount_price))
                                        <span class="old-price"> ${{ $product->price }}</span>
                                    @else
                                                                            <span class="new-price">${{ $product->discount_price }}</span>
                                                                            <span class="old-price">Was ${{ $product->price }}</span>
                                    @endif



                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p>{{ $product->description }}</p>
                                    </div><!-- End .product-content -->

                                    <div class="details-filter-row details-row-size">


                            @if ($product->quantity> 0 )
                                <label class="stock bg-success">In Stock</label>
                            @else
                                <label class="stock bg-danger">Out of Stock</label>

                            @endif
                                    </div><!-- End .details-filter-row -->



                                    <div class="product-details-action">
                                        <div class="details-action-col">
                                            <div class="product-details-quantity">
                                                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            </div><!-- End .product-details-quantity -->

                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .details-action-col -->

                                        <div class="details-action-wrapper">
                                            <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                            <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="{{url('Products/'.$product->category->slug)}}">{{ $product->category->name }}</a>,

                                        </div><!-- End .product-cat -->

                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Description</h3>
                                    <p>
                                    {{ $product->long_description }}
                                    </p>

                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->

                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
 --}}

{{--     <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        <img src="{{asset('/catagoryimage/'.$product->image) }}" class="w-100" alt="Img">
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            HP Laptop 15IQasd54
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / HP Laptop
                        </p>
                        <div>

                                    @if (is_null( $product->discount_price))
                                        <span class="original-price"> ${{ $product->price }}</span>
                                    @else
                                                                            <


                                                <span class="selling-price">${{ $product->discount_price }}</span>
                                                <span class="original-price">Was ${{ $product->price }}</span>
                                                                            @endif






                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                <input type="text" value="1" class="input-quantity" />
                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
        {{ $product->description }}                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body> --}}

@include('user.scripts')

