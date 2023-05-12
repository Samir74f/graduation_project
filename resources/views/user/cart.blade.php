  @include('user.css')

  <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->


            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">

	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
                                            <th>Product Name</th>
											<th>Price</th>
											<th>Quantity</th>


											<th></th>
										</tr>
									</thead>
                                    <form action="{{url('makeorder')}}" method="POST">
                                        {{ csrf_field() }}
									<tbody>
										@foreach ($cart as $carts)<tr>

                                            <td class="product-col">
												<div class="product">

													<h3 class="product-title">
														<a href="{{url('view_product/'.$carts->product_title)}}"> <input type="text" name="product_title[]" value="{{$carts->product_title}}" hidden>{{$carts->product_title}}</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col"><input type="text" id="price" name="price[]" value="{{$carts->price}}" hidden>${{$carts->price}}</td>
                                            <td class="price-col"><input type="number" id="quantity" min="1"  name="quantity[]" value="{{$carts->quantity}}" ></td>

											<td class="remove-col">
                                        <a class="btn-remove" href="{{url('/destroyitemcart/'.$carts->id)}}"><i class="icon-close"></i></a>

                                            </td>


											</tr> @endforeach
									</tbody>
								</table><!-- End .table table-wishlist -->

	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td>${{$total}}</td>
	                						</tr><!-- End .summary-subtotal -->

	                						<tr class="summary-total">
	                							<td>Total:</td>
	                							<td>${{$total}}</td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->


	                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT CASH</button>

                                </div><!-- End .summary -->


		            			<a href="{{url('AllProducts')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 --></form>
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<script>
    let quantity = document.querySelector('#quantity');
    let price = document.querySelector('#price');

    quantity.addEventListener('input', updateTotal);
    price.addEventListener('input', updateTotal);

    function updateTotal() {
        let total = quantity.value * price.value;
        document.querySelector('#total').textContent = total.toFixed(2);
    }
</script>
