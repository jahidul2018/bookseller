<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>bookseller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }} ">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    {{-- start css --}}
    @include ('frontend.partials.css')
    {{-- end css --}}
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
            @include('frontend.partials.headerNav')
                    <!-- End Header Area -->
            @include('frontend.partials.search')
            @include('frontend.partials.navcart')
                    <!-- Start Slider Area -->

            @yield('content')


            @include('frontend.partials.footer')
                    <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->
    @yield('script')    
    @include('frontend.partials.js')

</body>

</html>