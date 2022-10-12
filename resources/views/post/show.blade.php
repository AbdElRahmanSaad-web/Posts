<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.css') }}">
    <title>Show Post</title>
</head>
<body>
    <div class="container m-auto mt-5 w-75 bg-primary text-light border-rounded p-5">
        <h1>Post Details</h1>
        <h1>{{ $post->title }}</h1>
        <h4>{{ $post->body }}</h4>
        <img src="{{ asset('images/'.$post->image) }}" width="200px" height="200px">
        <p>{{ $post->created_at }}</p>
    </div>
</body>
</html>
