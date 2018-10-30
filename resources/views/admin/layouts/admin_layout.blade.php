<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('favicon.ico') }}" rel="shortcut icon" />
    <title>Admin metrix</title>
    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <!-- admin_assets.css ====> webpack.mix.js -->
    <link href="{{ URL::asset('/css/admin/admin_assets.css') }}" rel="stylesheet" type="text/css" />


</head>
<body>


<div class="content">

    @include('flash::message')
<div class="page-wrapper">
    <div class="page-container">
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                @include('admin/menu')
            </div>
        </div> {{--end  page-sidebar-wrapper--}}

        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div> {{--end page-content-wrapper--}}

    </div>
</div>


</div>

<!-- Scripts -->

<!-- admin_assets.js ====> webpack.mix.js -->
<script src="{{ URL::asset('/js/admin/admin_assets.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('/js/admin/admin.js') }}" type="text/javascript"></script>


<script  src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{url('/js/admin/tinymce_init.js')}}" type="text/javascript"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    url_prefix = '{{ url('/') }}';
</script>

@stack('include_scripts')

@stack('scripts_code')

@yield('include_script')

</body>
</html>
