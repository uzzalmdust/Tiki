<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <title>{{ $title ?? 'Todo Manager' }}</title>
        
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        {{ $slot }}
        
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>