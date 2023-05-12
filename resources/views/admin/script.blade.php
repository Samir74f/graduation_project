
 <!-- General JS Scripts -->
  <script src="{{URL::asset('admin/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{URL::asset('admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{URL::asset('admin/assets/js/page/index.js')}}"></script>

  <script src="{{URL::asset('admin/assets/js/dropify.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{URL::asset('admin/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{URL::asset('admin/assets/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    @if(session('status'))
        Swal.fire({
            title: '{{ session('status') }}',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        })
    @endif
</script>


