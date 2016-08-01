<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{!! asset('assets/img/favicon.ico') !!}">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/material.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/ripples.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/snackbar.min.css') !!}" media="all">
    {{-- <link href="{{ elixir('assets/css/style.css') }}" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

    @include('common.header')

    <div id="wrapper">
        @include('common.sidebar')
        <div id='page-content-wrapper'>
            @yield('content')
        </div>
    </div>

    @include('common.footer')

    <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/ripples.min.js') !!}"></script>
    <script src="{!! asset('assets/js/material.min.js') !!}"></script>
    <script src="{!! asset('assets/js/snackbar.min.js') !!}"></script>
    {{-- <script src="{{ elixir('assets/js/app.js') }}"></script> --}}

    @if(session()->has("flash_message"))
        <script type="text/javascript">
            $(function() {
                $.snackbar({content: "{{ session()->get('flash_message') }}", timeout: 30000});
            });
        </script>
    @endif

</body>
</html>
