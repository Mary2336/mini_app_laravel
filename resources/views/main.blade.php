<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    
    <script src="{{ asset('js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    
    <footer class="text-center mt-8">
            &copy; 2024 Mary. Tous droits réservés.
        </footer>
    @yield('script')
</body>

</html>
