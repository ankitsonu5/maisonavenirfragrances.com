<!doctype html>
<html lang="en"   class="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('website/assets/images/logo.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('Adminasset/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('Adminasset/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{ asset('Adminasset/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" />
    <!-- loader-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('Adminasset/assets/css/pace.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <!--Theme Styles-->
    <link href="{{ asset('Adminasset/assets/css/dark-theme.css') }}" rel="stylesheet" />

    <link href="{{ asset('Adminasset/assets/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/css/header-colors.css') }}" rel="stylesheet" />

    <link href="{{ asset('Adminasset/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

    <link href="{{ asset('Adminasset/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />


    {{--
    <link href="{{ asset('Adminasset/assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="{{ asset('Adminasset/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}"> --}}


    <link href="{{ asset('Adminasset/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Adminasset/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />

    <title>Maison de l Avenir Fragrances</title>
    <script src="{{ asset('Adminasset/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>
