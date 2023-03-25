<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tienda-@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="description" content="@yield('meta-description', "")" />
</head> 
<body class="antialiased bg-slate-100 dark:bg-slate-900">
@include('layouts.partials.navigation')
    @yield('content')

    @if(session('status'))
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('status') }}
    </div>
    @endif    
</body>
</html>