<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield("title")</title>
    

</head>
<body>
    @include('layouts.partials.navigation')    
   

    @yield("content")
</body>
</html>