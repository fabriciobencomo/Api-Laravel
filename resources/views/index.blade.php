<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API-REST</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach($posts as $post)
                <div class="bg-teal-300 rounded-md m-5 shadow-sm">
                    <div class="bg-teal-500 rounded-md px-2">
                        <h2 class="font-bold text-lg mb-4">{{$post->title}}</h2>
                    </div>
                    <p class="text-sm">{{$post->excerpt}}</p>
                    <p class="text-sm text-right py-2">{{$post->published_at}}</p>
                </div>
                @endforeach
            </div>
            <div class="flex justify-center mb-10">
                {{$posts->links()}}
            </div>
        </div>
    </body>
</html>
