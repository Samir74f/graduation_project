<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
@include('admin.css')
@include('admin.navbaradmin')
@include('admin.sidebar')

</head>

<body>





    </div>
</div>
 <div class="main-content">
        <section class="section  ">

<div class="card border-primary mb-2 center col-md-12 col-lg-8 col-xl-15 center  " style=" position: center;">
@if (session('messages'))
    <div class="alert alert-success">{{ session('message')}}</div>

@endif

    <div class="card-header">Edit category {{$data->name}} </div>
@include('sweetalert::alert')
<form enctype="multipart/form-data" method="POST" action="{{url('update-cat/'.$data->id)}}">
    @method ('Put')
    @csrf
    <div class="row ml-2 mr-2">
        <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">Title</label>
            <input class="input" type="text" name="title" id="title" value="{{$data->name}}" >
        </div>
        <div class="col-md-6 mb-3">
            <!-- remove empty div -->
        </div>

        <div class="mb-3">
            <!-- use label tag for input fields -->
            <label for="file">Main Photo</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="mb-3">
                    <img src="{{asset('/catagoryimage/'.$data->image)}}" alt="">
        </div>


        <div class="row gutters  mb-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right ">
                    <!-- use button tag for submit button -->
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Update category</button>
                </div>
            </div>
        </div>
</form>

  </div>
</div>
</div>
</section>
</div>



</div>














 @include('admin.script')



</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
