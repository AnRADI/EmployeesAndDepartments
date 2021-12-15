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
</head>
<body class="app-layout">
    <div id="app">
        <nav class="container pt-4">

            <h4 style="text-align: right">Отделы</h4>

            <ul class="main-nav">
                @foreach($departments as $department)
                    <li>
                        <a href="{{ route('employees.department', $department->id) }}" class="employee-link ml-4 text-muted">
                            {{ $department->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
