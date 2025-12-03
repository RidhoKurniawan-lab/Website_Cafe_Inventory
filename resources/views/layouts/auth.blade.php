<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body class="flex items-center justify-center min-h-screen p-4 bg-linear-to-br from-blue-50 to-indigo-100">
    @yield('content')
    @include('partials.footer')
</body>
    @vite('resources/js/app.js')
</html>
