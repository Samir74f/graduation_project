@include('user.css')



        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Wishlist<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->


            <div class="page-content">
            	<div class="container">


                    @if (Auth::user()->wishlist->count() )
					<table class="table table-wishlist table-mobile">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Stock Status</th>
								<th></th>
								<th></th>
							</tr>
						</thead>

            						<tbody>
                            @foreach ($wishlists as $wishlist)
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="{{asset('/catagoryimage/'.$wishlist->product->image)}}" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">{{$wishlist->product->name}}</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">${{$wishlist->product->price}}</td>
								<td class="stock-col"><span class="in-stock">{{ $wishlist->product->status == '1' ? 'Out stock' : 'In stock' }}</span></td>
                                <td class="action-col">
                                    <form action="{{url('/addcart/'.$wishlist->product->id)}}" id="contact_form" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                        <input name="quantity" type="number"  class="form-control" style="width: 220px"/>
                                        <div class="product-action-vertical">
                                            <button  class="btn-product-icon btn-wishlist" title="Add to wishlist" type="submit"></button>
                                        </div><!-- End .product-action -->

									    <button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
                                    </div>
                                    </form>
								</td>
								<td class="remove-col">

                                        <a class="btn-remove" href="{{url('/destroy/'.$wishlist->id)}}"><i class="icon-close"></i></a>

							</tr>
{{-- 							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="assets/images/products/table/product-2.jpg" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">Blue utility pinafore denim dress</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">$76.00</td>
								<td class="stock-col"><span class="in-stock">In stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
								</td>
								<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
							</tr>
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="assets/images/products/table/product-3.jpg" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">Orange saddle lock front chain cross body bag</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">$52.00</td>
								<td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
								</td>
								<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
							</tr> --}}
                @endforeach
						</tbody>


					</table><!-- End .table table-wishlist -->


            @endif
            	</div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
