<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
@include('admin.css')
</head>

<body>

@include('admin.navbaradmin')
@include('admin.sidebar')

<style>



</style>

<div class="main-content">

</section>














  <section class="section  ">

<div class="card border-primary mb-2 center col-md-12 col-lg-20 col-xl-8 justfiy-center  " style=" position: center;">


    <div class="card-header"> Category</div>
@include('sweetalert::alert')

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Add Category </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All Category</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <form enctype="multipart/form-data" method="POST" action="{{url('createcatagory')}}">

            @csrf
                <div class="card-body text-primary ">
                <div class="mb-3">
                <input class="input" type="text" name="title" placeholder="Name"
                required="" >
                </div>



               <div class="mb-3"><
                label >Add photo</label>
                <input type="file" name="file" class="form-control">
            </div>

                    <div class="row gutters bb mb-3">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right ">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Category </button>
                            </div>
                        </div>
                    </div>

        </form>

 </div>
 </div>




                             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">









<table class="table table-bordered table-striped ">
<thead>
<tr >
<th>Name</th>
<th>Image</th>
<th>Action</th>

</tr>


</thead>
<tbody>
@foreach ($categories as $category)
<tr>
    <td>{{ $category->name }}</td>
    <td>
<img src="{{asset('/catagoryimage/'.$category->image)}}" alt="" width="80px">
    </td>
<td>
    <a class="btn btn-primary" href="{{url('edit-cat/'.$category->id)}}">Edit</a>
    <a class="btn btn-danger" href="{{url('delete-cat/'.$category->id)}}">Delete</a>
</td>
</tr>
@endforeach


</tbody>



</table>



                             </div>

                </div>




                             </div>

                </div>







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
