<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/flash.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>
        @include('frontend.components.navbar')

        <main>
            @yield("content")
        </main>

        @include('frontend.components.review')
        @include('frontend.components.inbox')
        @include('frontend.components.footer')

        <!-- ==================Script Link Part Start Here===============    -->
        {{-- <script src="js/jquery-1.12.4.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>