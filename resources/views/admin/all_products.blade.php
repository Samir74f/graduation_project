<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
@include('admin.css')
</head>

<body>

    @include('admin.navbaradmin')
    @include('admin.sidebar')












 <div class="main-content">
        <section class="section  ">

<div class="card border-primary mb-2 center col-md-12 col-lg-20 col-xl-15 center  " style=" position: center;">








 <div class="card-header">Products</div>





<table class="table table-bordered table-striped ">
<thead>
<tr >
<th>Name</th>
<th>Image</th>
<th>Price</th>
<th>Discount</th>
<th>Quntity</th>
<th>Category</th>
<th>Status</th>
<th>description</th>
<th>Action</th>

</tr>


</thead>
<tbody>
@foreach ($products as $pro)
<tr>

    <td>{{ $pro->name }}</td>
<td>
<img src="{{asset('/catagoryimage/'.$pro->image)}}" alt="" width="80px">
</td>
<td>{{ $pro->price }}</td>
<td>{{ $pro->discount_price }}</td>
<td>{{ $pro->quantity }}</td>
<td><a href="">{{ $pro->category->name }}</a></td>
<td>{{ $pro->status == '1' ? 'Hidden' : 'Visible' }}</td>
<td>{{ $pro->description }}</td>




<td>
    <a class="btn btn-primary" href="{{url('edit-pro/'.$pro->id)}}">Edit</a>
    <a class="btn btn-danger" href="{{url('delete-pro/'.$pro->id)}}">Delete</a>
</td>

</tr>
@endforeach


</tbody>



</table>




</div>
        </section></div>







    @include('admin.script')



</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
