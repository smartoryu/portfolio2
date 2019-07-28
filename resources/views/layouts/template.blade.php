<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible, Cache-control" content="ie=edge, no-cache">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{config('app.name')}} </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/bootstrap_4/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <header>
        @include('inc.navbar')
    </header>
        
    <main role="main" class="flex-center">
        <div class="container">
            @include('inc.messages')
            @yield('main')
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <span class="text-muted"> @yield('footer') </span>
    </footer>

    <script src="/js/jquery_3_4_1.js"></script>
    <script src="/bootstrap_4/dist/js/bootstrap.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible, Cache-control" content="ie=edge, no-cache">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{config('app.name')}} </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/bootstrap_4/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

    <header>
        @include('inc.navbar')
    </header>
        
    <main role="main" class="flex-center">
        <div class="container">
            @include('inc.messages')
            @yield('main')
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <span class="text-muted"> @yield('footer') </span>
    </footer>

    <script src="/js/jquery_3_4_1.js"></script>
    <script src="/bootstrap_4/dist/js/bootstrap.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>

</body>
</html> --}}
