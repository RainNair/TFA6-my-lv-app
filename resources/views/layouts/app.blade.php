<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel POS System' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="{{ route('home') }}">Laravel POS</a>
            <nav aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
                <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
            </nav>
        </div>
    </header>
    <main class="container page-content">
        @yield('content')
    </main>
    <footer class="site-footer"><div class="container">Laravel POS System</div></footer>
</body>
</html>
