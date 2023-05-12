<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::asset('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{URL::asset('assets/images/icons/safari-pinned-tab.svg" color="#666666')}}">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/1.png')}}">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{URL::asset('assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/demos/demo-4.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('assets/css/plugins/nouislider/nouislider.css')}}"">

</head>
@include('user.navbar')
@include('sweetalert::alert')
<style>



/* Product Card */
.product-card{
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 24px;
}
.product-card a{
    text-decoration: none;
}
.product-card .stock{
    position: absolute;
    color: #fff;
    border-radius: 4px;
    padding: 2px 12px;
    margin: 8px;
    font-size: 12px;
}
.product-card .product-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.product-card .product-card-img img{
    width: 100%;
}
.product-card .product-card-body{
    padding: 10px 10px;
}
.product-card .product-card-body .product-brand{
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 4px;
    color: #937979;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .product-name{
    font-size: 20px;
    font-weight: 600;
    color: #000;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .selling-price{
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin-right: 8px;
}
.product-card .product-card-body .original-price{
    font-size: 18px;
    color: #937979;
    font-weight: 400;
    text-decoration: line-through;
}
.product-card .product-card-body .btn1{
    border: 1px solid;
    margin-right: 3px;
    border-radius: 0px;
    font-size: 12px;
    margin-top: 10px;
}
/* Product Card End */
/* Category Start */
.category-card{
    border: 1px solid #ddd;
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    margin-bottom: 24px;
    background-color: #fff;
}
.category-card a{
    text-decoration: none;
}
.category-card .category-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.category-card .category-card-body{
    padding: 10px 16px;
}
.category-card .category-card-body h5{
    margin-bottom: 0px;
    font-size: 18px;
    font-weight: 600;
    color: #000;
    text-align: center;
}
/* Category End */


</style>

