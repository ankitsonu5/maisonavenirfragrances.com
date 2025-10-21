
<!doctype html>
<html lang="en"   >

{{-- class="{{ Session::get('theme')}}" --}}
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('website/assets/images/logo.png') }}" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('Adminasset/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="{{ asset('Adminasset/assets/css/pace.min.css') }}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('Adminasset/assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('Adminasset/assets/css/header-colors.css') }}" rel="stylesheet" />

  <title>Maison del Avenir Fragrances</title>


<meta name="csrf-token" content="{{ csrf_token() }}" />



</head>



{{ $slot }}

 <!-- Bootstrap bundle JS -->
 <script src="{{ asset('Adminasset/assets/js/bootstrap.bundle.min.js') }}"></script>
 <!--plugins-->
 <script src="{{ asset('Adminasset/assets/js/jquery.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/js/pace.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
 <!--app-->
 <script src="{{ asset('Adminasset/assets/js/app.js') }}"></script>
 <script src="{{ asset('Adminasset/assets/js/index.js') }}"></script>
 <script src="{{ asset('Adminasset/main.js') }}"></script>
 <script>
     new PerfectScrollbar(".best-product")

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });



 </script>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>
       $(document).ready(function() {
           $(function() {
               $('.editor').each(function(e) {
                   CKEDITOR.replace(this.id, {
                       filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token(), 'type' => 'file']) }}",
                       filebrowserImageUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token(), 'type' => 'image']) }}",
                       filebrowserUploadMethod: 'form',
                       allowedContent: true
                   });
               });
           })
       });
   </script>
 </body>

 </html>
@if (Session::has('success'))
<script>
    var Toast = Swal.mixin({
        toast: true,
        type: "success",
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });
    Toast.fire({
        icon: 'success',
        title: ' {{ session('success') }}'
    })
</script>
@endif


@if (Session::has('error'))
<script>
    var Toast = Swal.mixin({
        toast: true,
        type: "error",
        position: 'top-start',
        showConfirmButton: false,
        timer: 5000
    });
    Toast.fire({
        icon: 'error',
        title: ' {{ session('error') }}'
    })
</script>
@endif


