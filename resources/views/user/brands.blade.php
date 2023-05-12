@include('user.css')
<body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">All Brands</h4>
                </div>


                @foreach ($brands as $brn)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="{{asset('/catagoryimage/'.$brn->image)}}" class="w-100" alt="Laptop" width="50px">
                            </div>
                            <div class="category-card-body">
                                <h5>{{ $brn->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
