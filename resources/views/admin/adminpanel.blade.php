<!DOCTYPE html>
<html lang="en">


<head>
@include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
@include('admin.navbaradmin')
@include('admin.sidebar')
      <!-- Main Content -->
@include('admin.body')
    </div>
  </div>
@include('admin.script')
</body>



</html>
