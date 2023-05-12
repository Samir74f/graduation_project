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

<div class="card border-primary mb-2 center col-md-12 col-lg-8 col-xl-15 center  " style=" position: center;">
@if (session('messages'))
    <div class="alert alert-success">{{ session('message')}}</div>

@endif

    <div class="card-header">Edit Site Setting </div>
<form enctype="multipart/form-data" method="POST" action="{{url('Update_setting')}}">
    @method ('Put')
    @csrf
    <div class="row ml-2 mr-2">
        <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">Title</label>
            <input class="input" type="text" name="title" id="title" value="{{$data->name}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">Email</label>
            <input class="input" type="email" name="Email" id="title" value="{{$data->email}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">phone</label>
            <input class="input" type="number" name="phone" id="title" value="{{$data->phone}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">facebook</label>
            <input class="input" type="text" name="facebook" id="title" value="{{$data->facebook}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">twitter</label>
            <input class="input" type="text" name="twitter" id="title" value="{{$data->twitter}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">instagram</label>
            <input class="input" type="text" name="instagram" id="title" value="{{$data->instagram}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">youtube</label>
            <input class="input" type="text" name="youtube" id="title" value="{{$data->youtube}}" >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">tiktok</label>
            <input class="input" type="text" name="tiktok" id="title" value="{{$data->tiktok}}"  >
        </div>
                <div class="col-md-6 mb-3">
            <!-- use label tag for input fields -->
            <label for="title">description</label>
            <textarea class="input" type="text" name="description" id="title"  >{{$data->description}}</textarea>
        </div>


        <div class="mb-3">
            <!-- use label tag for input fields -->
            <label for="file">logo</label>
            <input type="file" name="file1" id="file" class="form-control">
        </div>
        <div class="mb-3">
                    <img src="{{asset('/catagoryimage/'.$data->logo)}}" alt="" style="width: 200px">
        </div>
        <div class="mb-3">
            <!-- use label tag for input fields -->
            <label for="file">Favicon</label>
            <input type="file" name="file2" id="file" class="form-control">
        </div>
        <div class="mb-3">
                    <img src="{{asset('/catagoryimage/'.$data->favicon)}}" style="width: 200px" alt="">
        </div>


        <div class="row gutters  mb-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right ">
                    <!-- use button tag for submit button -->
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Update Settings</button>
                </div>
            </div>
        </div>
</form>

  </div>
</div>
</div>
</section>
</div>
































 @include('admin.script')

