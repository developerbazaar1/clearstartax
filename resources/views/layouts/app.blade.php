<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="cleartax">
        <meta name="theme-color" content="#8AC8D6">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <title>Login-clearstarttax</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}">
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
        <!-- Font-icon css-->
        <!-- favicon -->
        <link href="{{ URL::asset('assets/img/c-favicon.png') }}" rel="icon">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <!-- :: body start here -->
    <body class="log-bg">
       
        @yield('content')

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
