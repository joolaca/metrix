<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Metrix-Építő Kft.</title>


    <!-- Links -->


    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


    <link href="{{ URL::asset('/css/assets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/css/index.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div class="container">
    @include('flash::message')
</div>
<!-- Navigation ==========================================-->
{!!  \App\Http\Controllers\MenuController::renderFrontendMenu()!!}

@yield('content')

<script type="text/javascript" src="{{ URL::asset('/js/assets.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/index.js') }}"></script>

<!-- flash::message ==========================================-->
<script> $('#flash-overlay-modal').modal(); </script>
</body>
</html>
