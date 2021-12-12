<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title> HPI - @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body class="app-layout">
    <div id="app">
        <nav class="container pt-4">
            <ul class="main-nav">
                <li>
                    <a href="{{ route('teachers.index') }}" class="teacher-link ml-4 text-muted">
                        Преподаватели
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a :href="route('categories')" class="ml-4 text-muted">--}}
{{--                        Категории--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
