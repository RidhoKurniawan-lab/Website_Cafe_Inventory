<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
</head>

<body class="bg-gray-100">
    <div class="overlay" id="overlay"></div>
    <div class="flex min-h-screen">
        @include('partials.sidebar')

        <div class="flex-col flex-1">
            @include('partials.topbar')

            <main class="flex-1 w-screen p-3 overflow-y-auto lg:w-auto bg-gray-50">
                @yield('content')
            </main>

        </div>

        @include('partials.footer')
    </div>
</body>
    @vite('resources/js/app.js')

</html>
