<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Index - Laravel Course</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <style type="text/css">
        .bling {
            background-color: orange;
        }
    </style>

    </head>
    <body>

        <h1>{{ $events->count() }} Events</h1>


			@foreach($events as $event)
                <article>
                    <h1># {{ $event->name }}</h1>
                    <p>{{ $event->description }}</p>
                    <p>{!! $formatPrice($event) !!}</p>
                    <p>Lieu : {{ $event->location }}</p>
                    <p>Date : {{ $formatDate($event->start_at) }}</p>
                    @if(! $loop->last)
                        <hr>
                    @endif
                </article>
            @endforeach
        

    </body>
</html>


