<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Les Petites Bohèmes</title>
        <link rel="shortcut icon" href="../../assets/images/gt_favicon.png">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen" >
        {{-- <link rel="stylesheet" href="../../assets/css/main.css">  --}}
        <link rel="stylesheet" href="../../assets/css/new.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body>
        @include('partials.navbar')
        <div id="head">
		    <div class="container">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="../../assets/js/headroom.min.js"></script>
    <script src="../../assets/js/jQuery.headroom.min.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../js/scripts.js"></script>
    </body>
</html>
