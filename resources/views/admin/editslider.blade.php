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

    <div class="card-header">Edit Slider {{$data->title}} </div>
@include('sweetalert::alert')
<form enctype="multipart/form-data" method="POST" action="{{url('Update_slider/'.$data->id)}}">
    @method ('Put')
    @csrf
    <div class="row ml-2 mr-2">
        <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">Title</label>
            <input class="input" type="text" name="title" id="title" value="{{$data->title}}" >
        </div>
        <div class="col-md-6 mb-3">
            <!-- remove empty div -->
        </div>
        <div class="p-3">
            <!-- use label tag for input fields -->
            <label for="description">Description</label>
            <textarea class="input" type="text" id="description" name="description" placeholder="description" class="form-control form-control-sm" cols="30" rows="10"> {{$data->description}}</textarea>
        </div>
        <div class="mb-3">
            <!-- use label tag for input fields -->
            <label for="file">Main Photo</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="mb-3">
                    <img src="{{asset('/catagoryimage/'.$data->image)}}" alt="">
        </div>

        <div class="col-md-2 mb-1">
            <!-- use label tag for input fields -->
            <input type="checkbox" name="status" id="status" style="width: 20px;hight20px ;" {{$data->status == '1' ? 'checked':''}}>
            <label for="status" class="p-l-2" style="color: black">Hide</label>
        </div>
        <div class="row gutters  mb-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right ">
                    <!-- use button tag for submit button -->
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Update slider</button>
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
