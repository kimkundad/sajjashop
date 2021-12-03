<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="Webmaster">
    <meta name="description" content="{{ setting()->facebook_detail }}">
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" />
    <title>@yield('title')</title>

    @if(isset(setting()->facebook_image))
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ setting()->facebook_title }} ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('img/setting/'.setting()->facebook_image) }}">
    <meta property="og:description" content="{{ setting()->facebook_detail }}">
    @endif


    @include('layouts.inc-style')

    
</head>

<body>
    @include('layouts.inc-header2')

    

    @yield('content')

    

    @include('layouts.inc-footer')
    
    <!-- JavaScripts -->
    @include('layouts.inc-script')
    @yield('scripts')
    
</body>

</html>