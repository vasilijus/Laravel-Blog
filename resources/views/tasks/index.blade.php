<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}"> {{ $task->body }} </a>
            </li>
        @endforeach
        </ul>
    </body>
</html>
