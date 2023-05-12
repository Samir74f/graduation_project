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

    <div class="card-header">Edit Product {{$data->name}}   </div>
@include('sweetalert::alert')
<form enctype="multipart/form-data" method="POST" action="{{url('Update_Product/'.$data->id)}}">
    @method ('Put')
            @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">basic </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Amonut</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">More images</button>
                </ul>
                <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <div class="row ml-2 mr-2">
                                                        <div class="col-md-6 mb-3">

                                                    <input class="input" type="text" name="title" value="{{$data->name}}"
                                                     >
                                                    </div>






                                                    <div class="col-md-6 mb-3" >

                                                            <select class="input" onchange="this.form.submit()" name="category_id"  value="{{$data->category->id}}">

                                                                    <option value="" >select Category</option>
                                                                    @foreach ($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->id == $data->category->id ? 'selected':''}}
                                                                    {{$category->name}}</option>

                                                                    @endforeach
                                                            </select>

                                                    </div>
</div>


                                                    <div class="p-3">
                                                        <input class="input" type="text" id="description"  name="description" value="{{$data->description}}" class="form-control form-control-sm" />
                                                        <textarea class="input" type="text" id="description"  name="long_description" value="" class="form-control form-control-sm" />{{$data->long_description}}</textarea>

                                                    </div>

                                                    <select class="input" onchange="this.form.submit()" name="brand_id" >
                                                        <option value="" >select Brand</option>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{$brand->id == $data->category->id ? 'selected':''}}
                                                                    {{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>


                                            <div class="mb-3"><label >Main Photo</label><input type="file" name="file" class="form-control"></div>
                                            <img src="{{asset('/catagoryimage/'.$data->image)}}" alt="">

                            </div>





                             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                    <div class="row ml-2 mr-2">
                                                                                <div class="col-md-4  mb-3">
                                                                                <input class="input" type="number" id="phonenumber"  name="quantity" value="{{$data->quantity}}" class="form-control form-control-sm" />
                                                                            </div>
                                                        <div class="col-md-4  mb-3">
                                                            <input class="input" type="number" id="Price"  name="Price" value="{{$data->price}}" class="form-control form-control-sm" />
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input class="input" type="number" id="discount"  name="discount" value="{{$data->discount_price}}" class="form-control form-control-sm" />
                                                        </div>
                                                        </div>



                                                                            <div class="col-md-2 mb-1"><div class="mb-3"><input type="checkbox" name="status" style="width: 20px;hight20px ;" {{$data->status == '1' ? 'checked':''}}> <label class="p-l-2" style="color: black">Visible</label></div></div>

                                                                            <div class="col-md-2 mb-1"><div class="mb-3"><input type="checkbox" name="trending" style="width: 20px;hight20px ;" {{$data->trending == '1' ? 'checked':''}}> <label class="p-l-2" style="color: black">Trending</label></div></div>










                             </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                     <div class="mb-3"><label >Product images</label><input type="file" name="image[]" multiple class="form-control"></div>

                <div class="d-flex justify-content-center">
                    @forelse ($data->productimage as $image)
                        <img class="me-4" src="{{asset($image->image)}}" style="width: 80px;height:80px">
                    @empty
                        <h5>No images added</h5>
                    @endforelse
                </div>

                </div>
                </div>







                    <div class="row gutters  mb-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right ">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Product </button>
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
