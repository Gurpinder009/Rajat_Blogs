<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    @include('shared.navbar')
    <main class =" bg-gray-200">
        @yield('working')
    </main>
    @include('shared.footer')
    <script src="{{ asset('js/script.js') }}"></script>
<script src="https://kit.fontawesome.com/265a92e85a.js" crossorigin="anonymous"></script>
</body>

</html>
