<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Admin</title>
            <!-- Bootstrap Core CSS -->

            <link href="{{ URL::asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

            <!-- MetisMenu CSS -->
            <link href="{{ URL::asset('admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

            <!-- Timeline CSS -->
            <link href="{{ URL::asset('admin/dist/css/timeline.css') }}" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="{{ URL::asset('admin/dist/css/sb-admin-2.css') }}"  rel="stylesheet">

            <!-- Morris Charts CSS -->
            <link href="{{ URL::asset('admin/bower_components/morrisjs/morris.css') }}" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href=" {{ URL::asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        </head>
        <body>
            @yield('content')

            <!-- jQuery -->
            <script src="{{ URL::asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{ URL::asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="{{ URL::asset('admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

            <!-- Morris Charts JavaScript -->
            <script src="{{ URL::asset('admin/bower_components/raphael/raphael-min.js') }}"></script>
            <script src="{{ URL::asset('admin/bower_components/morrisjs/morris.min.js') }}"></script>
            <script src="{{ URL::asset('admin/js/morris-data.js') }} "></script>

            <!-- Custom Theme JavaScript -->
            <script src="{{ URL::asset('admin/dist/js/sb-admin-2.js') }}"></script>
    </body>
    </html>
    

