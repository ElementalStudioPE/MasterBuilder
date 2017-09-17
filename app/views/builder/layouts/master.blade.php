<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MasterBuilder</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('static/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('static/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            @include('panel.layouts.nav')

            <div id="page-wrapper">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                @yield('content')

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('static/js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('static/js/bootstrap.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('static/js/plugins/morris/raphael.min.js')}}"></script>

    </body>

    </html>
