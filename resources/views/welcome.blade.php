<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Management</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Task Management
        </div>

        <div class="links">
            <a href="{{ route('tasks.create') }}">ADD NEW TASK</a>
            <a href="{{ route('tasks.index') }}">TASKS LIST</a>

        </div>
    </div>
</div>
</body>
</html>