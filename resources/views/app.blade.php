<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tiki | Online ticketing system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('shuffle-for-bootstrap.png') }}">
</head>

<body>
    <div class="container-fluid">

        @include('layouts.header')
        
            @yield('content')


        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>