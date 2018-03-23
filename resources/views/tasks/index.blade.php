<!doctype html>
<html>

<head>




</head>
<title>      </title>

<body>

<ul>
@foreach($tasks as $task)
    <li>
        <a href="/blog/public/tasks/{{$task->id}}">
            {{$task->body}}
                </a>

    </li>

            @endforeach

</ul>

</body>

</html>