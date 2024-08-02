<!-- resources/views/new-post.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <new-post></new-post>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
