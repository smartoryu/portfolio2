<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    @include('inc.navbar')
    <main class="flex-center py-4">
        <div class="container">
            {{-- @include('inc.messages') --}}
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"> @yield('footer') </span>
        </div>
    </footer>

    <!-- jquery (required) -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- CKEditor (required) -->
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'editor1' );
        </script>
</body>
</html>
