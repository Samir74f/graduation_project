@include('user.css')

<body>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Products</h4>
                </div>
                @forelse ($data as $pro)
                    <div class="row justify-content-center">
                        @foreach( $data as $pro)
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


                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        @endforeach

                    </div><!-- End .row -->
                @empty
                    <h5>No Product with this search</h5>
                @endforelse

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
