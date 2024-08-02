<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel & Vue</title>

    @vite('resources/js/app.js') <!-- Or use <script src="{{ mix('js/app.js') }}"></script> for Laravel Mix -->
</head>
<body>
    <div id="app"></div>
    @vite('resources/js/app.js') <!-- Or use <script src="{{ mix('js/app.js') }}"></script> for Laravel Mix -->
</body>
</html>
