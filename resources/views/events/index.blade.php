<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Index - Laravel Course</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <h1>{{ count($events) }} Events</h1>


			@foreach($events as $event)
                <article>
                    <h1>#{{ $event->name }}</h1>
                    <p>{{ $event->description }}</p>
                    <p>{{ $event->price }} EUR</p>
                    <p>{{ $event->location }}</p>
                    <hr>
                </article>
            @endforeach

    </body>
</html>


