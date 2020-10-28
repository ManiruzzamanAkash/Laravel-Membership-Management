<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Membership Project')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('page_styles')
</head>
<body>
    <div id="wrapper">
        <p>Header</p>

        @yield('main-content')
        @yield('end-content')

        <p>Footer</p>
    </div>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('page_scripts')
</body>
</html>