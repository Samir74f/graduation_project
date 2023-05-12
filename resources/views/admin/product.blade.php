<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
@include('admin.css')
</head>

<body>

@include('admin.navbaradmin')
@include('admin.sidebar')





    </div>
</div>
 <div class="main-content">
        <section class="section  ">

<div class="card border-primary mb-2 center col-md-12 col-lg-20 col-xl-15 center  " style=" position: center;">
@if (session('messages'))
    <div class="alert alert-success">{{ session('message')}}</div>

@endif

    <div class="card-header">ADD Product</div>
@include('sweetalert::alert')
<form enctype="multipart/form-data" method="POST" action="{{url('Upload_Product')}}">
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

                                                    <input class="input" type="text" name="title" placeholder="Name"
                                                    required="" >
                                                    </div>






                                            <div class="col-md-6 mb-3">

                                                    <select class="input" onchange="this.form.submit()" name="category_id" >

                                                        @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                        @endforeach
                                                    </select>

                                            </div>
                                                                    </div>


                                                                                        <div class="p-3">
                                                        <input class="input" type="text" id="description"  name="description" placeholder="description" class="form-control form-control-sm" />
                                                        <textarea class="input" type="text" id="description"  name="Longdescription" placeholder="Long description" class="form-control form-control-sm" />
                                                                                        </textarea>
                                                    </div>

                                                    <select class="input" onchange="this.form.submit()" name="brand_id" >
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>


                                                                         <div class="mb-3"><label >Main images</label><input type="file" name="file" multiple class="form-control"></div>

                            </div>





                             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                    <div class="row ml-2 mr-2">
                                                                                <div class="col-md-4  mb-3">
                                                                                <input class="input" type="number" id="phonenumber"  name="quantity" placeholder="Quntity" class="form-control form-control-sm" />
                                                                            </div>
                                                        <div class="col-md-4  mb-3">
                                                            <input class="input" type="number" id="Price"  name="Price" placeholder="Price" class="form-control form-control-sm" />
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input class="input" type="number" id="discount"  name="discount" placeholder="Discount" class="form-control form-control-sm" />
                                                        </div>
                                                        </div>



                                                                            <div class="col-md-2 mb-1"><div class="mb-3"><input type="checkbox" name="status" style="width: 20px;hight20px ;"> <label class="p-l-2" style="color: black">Visible</label></div></div>

                                                                            <div class="col-md-2 mb-1"><div class="mb-3"><input type="checkbox" name="trending" style="width: 20px;hight20px ;"> <label class="p-l-2" style="color: black">Trending</label></div></div>










                             </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                     <div class="mb-3"><label >Upload_Product images</label><input type="file" name="image[]" multiple class="form-control"></div>




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
