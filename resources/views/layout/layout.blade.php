<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NPS Feedback Form</title>
    {{-- @yield('css')
    @yield('js') --}}

    <!-- JQUERY -->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <!-- SELECT 2 -->
    <link href="{{ asset('assets/css/select2/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/select2/select2.full.js') }}"></script>
    <script src="{{ asset('assets/js/selectScript.js') }}"></script>
    {{-- CSS --}}
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet" />
    {{-- JS --}}
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</head>

<body>
    @yield('content')
</body>

</html>
